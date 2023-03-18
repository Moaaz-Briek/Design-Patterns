# Template Method
Template method pattern is a behavioral design pattern that defines the skeleton of an algorithm in a base class and lets subclasses override specific steps of the algorithm without changing its structure. 

This pattern is used when we have a set of algorithms that share a common structure but have different implementations for certain steps.

A real-world example of the template method pattern in software development process can be seen in the development of a web application that generates reports. The application has to generate different types of reports such as sales reports, inventory reports, and customer reports. Each report type has its own unique data source, formatting, and presentation requirements.

To implement this functionality using the template method pattern, we can create a base class called ReportGenerator that defines the overall structure of the report generation process. This class will have a set of abstract methods that represent the different steps of the report generation process such as fetching data, formatting data, and presenting data.

Next, we can create concrete subclasses for each report type such as SalesReportGenerator, InventoryReportGenerator, and CustomerReportGenerator. These subclasses will inherit from the ReportGenerator base class and implement the abstract methods to provide their own unique implementation for each step of the report generation process.

For example, the SalesReportGenerator subclass will implement the fetch data method to retrieve sales data from the database, the format data method to format the sales data into a tabular format, and the present data method to display the sales data on a web page. Similarly, the InventoryReportGenerator subclass will implement the fetch data method to retrieve inventory data from the database, the format data method to format the inventory data into a chart format, and the present data method to display the inventory data on a web page.

By using the template method pattern in this scenario, we can ensure that the overall structure of the report generation process remains consistent across all report types while allowing each report type to have its own unique implementation for specific steps. This makes it easier to maintain and extend the application in the future as new report types can be added by simply creating new subclasses that inherit from the ReportGenerator base class and implement their own unique implementation for each step of the report generation process.

## Code Part

Here's an example implementation of the ReportGenerator class:

```
abstract class ReportGenerator {
    protected $data;

    public function generate() {
        $this->fetchData();
        $this->formatData();
        $this->presentData();
    }

    abstract protected function fetchData();
    abstract protected function formatData();
    abstract protected function presentData();
}
```

The `generate()` method is the template method that defines the overall report generation process. It calls three abstract methods: `fetchData()`, `formatData()`, and `presentData()`. 

These methods are left abstract so that each subclass can implement its own unique implementation for each step.

Now let's look at the implementation of the SalesReportGenerator subclass:

```
class SalesReportGenerator extends ReportGenerator {
    protected function fetchData() {
        // Fetch sales data from database
        $this->data = array(
            array('date' => '2021-01-01', 'sales' => 100),
            array('date' => '2021-01-02', 'sales' => 200),
            array('date' => '2021-01-03', 'sales' => 150),
        );
    }

    protected function formatData() {
        // Format sales data into a table
        $table = '<table>';
        foreach ($this->data as $row) {
            $table .= '<tr><td>' . $row['date'] . '</td><td>' . $row['sales'] . '</td></tr>';
        }
        $table .= '</table>';
        $this->data = $table;
    }

    protected function presentData() {
        // Display sales data on web page
        echo $this->data;
    }
}
```
In this example, the SalesReportGenerator subclass implements the fetchData() method to fetch sales data from the database, the formatData() method to format the sales data into a table, and the presentData() method to display the sales data on a web page.

Similarly, we can create subclasses for generating inventory reports and customer reports, and implement their own unique implementations for each step of the report generation process.

Using the Template Method pattern in this way allows us to reuse common code across different types of reports while still allowing each report type to have its own unique implementation for specific steps. This makes it easier to maintain and extend the application in the future as new report types can be added by simply creating new subclasses that inherit from the ReportGenerator base class and implement their own unique implementation for each step of the report generation process.

## The main difference between the Strategy pattern and the Template Method pattern is in their intent and implementation.

The Strategy pattern is used to define a family of interchangeable algorithms, encapsulating each one and making them interchangeable at runtime. This allows the client to choose the algorithm that best suits their needs, without having to modify the code.

On the other hand, the Template Method pattern is used to define a skeleton of an algorithm, with certain steps left to be implemented by subclasses. This allows for variations in behavior, while still maintaining a common structure.

In summary, the Strategy pattern is used to provide different algorithms that can be selected at runtime, while the Template Method pattern is used to define a common structure for algorithms with variations in behavior.