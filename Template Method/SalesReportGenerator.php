<?php

class SalesReportGenerator extends ReportGenerator
{

    protected function fetchData()
    {
        //Let's say that we have fetched the data from the database
        $this->data = array(
          array('date' => '01/03/2023', 'sales' => 100),
          array('date' => '05/03/2023', 'sales' => 200),
          array('date' => '07/03/2023', 'sales' => 630),
        );
    }

    protected function formatData()
    {
        //Format sales data into a table
        $table = '<table>';
        foreach ($this->data as $row) {
            $table .= '<tr><td>'.$row['date'].'</td><td>' . $row['sales'] . '</td></tr>';
        }
        $table .= '</table>';
        $this->data = $table;
    }

    protected function presentData()
    {
        //Display sales data on web page
        echo $this->data;
    }
}