<?php
class Rili
{
    private $year;
    private $month;
    private $days;
    private $weekNum;
    public function __construct()
    {
        $this->year=isset($_GET['year'])?$_GET['year']:date('Y');
        $this->month=isset($_GET['month'])?$_GET['month']:date('m');
        $this->days=date('t',mktime(0,0,0,$this->month,1,$this->year));
        $this->weekNum=date('w',mktime(0,0,0,$this->month,1,$this->year));
    }

    public function out(){
        echo "<table align='center'>";
        $this->changedays();
        $this->weekList();
        $this->daysList();
        echo "</table>";
    }
    public function weekList(){
        $weeks=array("日","一","二","三","四","五","六");
        echo "<tr>";
        for($i=0;$i<count($weeks);$i++){
            echo "<th class='fontb'>".$weeks[$i]."</th>";
        }
        echo "</tr>";
    }
    public function daysList(){
        echo "<tr>";
        for($j=0;$j<$this->weekNum;$j++){
            echo "<td>"."&nbsp"."</td>";
        }
        for($k=1;$k<=$this->days;$k++){
            $j++;
            if ($k==date('d')){
                echo "<td class='fontb'>".$k."</td>";
            }else{
                echo "<td>".$k."</td>";
            }
            if($j%7==0){
                echo "</tr><tr>";
            }
        }
        echo "</tr>";
    }
    public function preYear($year,$month){
        $year=$year-1;
        if($year==1970){
           $year=1970;
        }
        return "year=$year&month=$month";
    }
    public function preMonth($year,$month){
        if($month==1){
            $month=12;
            $year=$year-1;
        }else{
            $month--;
        }
        return "year=$year&month=$month";
    }
    public function nextYear($year,$month){
        $year++;
        if ($year==2038){
            $year=2038;
        }
        return "year=$year&month=$month";
    }
    public function nextMonth($year,$month){
        if($month==12){
            $month=1;
            $year=$year+1;
        }else{
            $month++;
        }
        return "year=$year&month=$month";

    }
    public function changedays(){
        echo "<tr>";
        echo "<td><a href='?".$this->preMonth($this->year,$this->month)."'><<</a></td>";
        echo "<td><a href='?".$this->preYear($this->year,$this->month)."'><</a></td>";
        echo "<td colspan='3'>".$this->year."年".$this->month."月"."</td>";
        echo "<td><a href='?".$this->nextYear($this->year,$this->month)."'>></a></td>";
        echo "<td><a href='?".$this->nextMonth($this->year,$this->month)."'>>></a></td>";
        echo "</tr>";
    }
} 