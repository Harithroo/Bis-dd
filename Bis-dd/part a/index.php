<html>

<head>
    <title>index1</title>
</head>

<body>
    <?php
    class Auction_item
    { //main class
        var $Id;
        var $Seller;
        var $Type;
        var $Description;
        var $AskingPrice;
        var $ClosingDate;
        var $CurrentBid;
        var $Bidhistory;

        function TotalPricePaid()
        {
            $fee = $this->buyersfee();
            $Total_Price = $this->AskingPrice + $fee;
            return $Total_Price;
        }
        function buyersfee()
        {
            $fee = $this->AskingPrice * 10 / 100; // (buyers premium)
            return $fee;
        }
        function NetAmountSellersReceive()
        {
            $Net_Amount_Sellers_Receive = $this->AskingPrice - 10; // seller recieves the askingprice minus £10(fee for the website from seller/ sellers premium)
            return $Net_Amount_Sellers_Receive;
        }
        function YourProfit()
        {
            $fee = $this->AskingPrice * 10 / 100; // fee for the website from buyer
            $Your_Profit = $fee + 10; //profit to the website // 10 is the fee for the website from seller
            return $Your_Profit;
        }


        function sold_in_askingprice()
        {
            $Total_Price = $this->TotalPricePaid();
            $NetAmountSellersReceive = $this->NetAmountSellersReceive();
            $YourProfit = $this->YourProfit();
            $buyersfee = $this->buyersfee();
            return "Product ID " . $this->Id . ", Asking Price £" . $this->AskingPrice . ", Buyers premium £" . $buyersfee . ", sellers premium £10. <br>"."Total price: £".$Total_Price." <br> Net amount the seller recives: £".$NetAmountSellersReceive." <br> Profit for the site: £".$YourProfit."<br>"; //message
        }

        function addtohistory($date, $bid)
        { //function to add bidding records to the bid history
            $this->Bidhistory[$date] = $bid;
        }

        function printhistory()
        { //function to print the bid history
            echo "item Id ". $this->Id ." the following bids are made:";
            echo "<table border='1'><tr><th>Date</th><th>Bid</th></tr>";
            foreach ($this->Bidhistory as $key => $value) {
                echo  "<tr><td>".$key."</td><td> £".$value."</td></tr>";
            }
            echo "</table>";
        }
    }

    class Furniture extends Auction_item
    { //sub class
        var $Dimention; // specific details for the item
        // construct method
        function __construct($Dimention, $Id, $Seller, $Type, $Description, $AskingPrice, $ClosingDate, $CurrentBid, $Bidhistory)
        {
            $this->Dimention = $Dimention;
            $this->Id = $Id;
            $this->Seller = $Seller;
            $this->Type = $Type;
            $this->Description = $Description;
            $this->AskingPrice = $AskingPrice;
            $this->ClosingDate = $ClosingDate;
            $this->CurrentBid = $CurrentBid;
            $this->Bidhistory = $Bidhistory;
        }
    }
    class Book extends Auction_item
    { //sub class
        var $Author; // specific details for the item
        var $Title; // specific details for the item
        // construct method
        function __construct($Author, $Title, $Id, $Seller, $Type, $Description, $AskingPrice, $ClosingDate, $CurrentBid, $Bidhistory)
        {
            $this->Autho = $Author;
            $this->Title = $Title;
            $this->Id = $Id;
            $this->Seller = $Seller;
            $this->Type = $Type;
            $this->Description = $Description;
            $this->AskingPrice = $AskingPrice;
            $this->ClosingDate = $ClosingDate;
            $this->CurrentBid = $CurrentBid;
            $this->Bidhistory = $Bidhistory;
        }
    }
    class Painting extends Auction_item
    { //sub class
        var $Painter; // specific details for the item
        var $Year; // specific details for the item
        private $reservedPrice; // specific details for the item (private)
        // construct method
        function __construct($Painter, $Year, $reservedPrice, $Id, $Seller, $Type, $Description, $AskingPrice, $ClosingDate, $CurrentBid, $Bidhistory)
        {
            $this->Painter = $Painter;
            $this->Year = $Year;
            $this->reservedPrice = $reservedPrice;
            $this->Id = $Id;
            $this->Seller = $Seller;
            $this->Type = $Type;
            $this->Description = $Description;
            $this->AskingPrice = $AskingPrice;
            $this->ClosingDate = $ClosingDate;
            $this->CurrentBid = $CurrentBid;
            $this->Bidhistory = $Bidhistory;
        }

        public function compare()
        { //  function for selling or not selling message
            if ($this->reservedPrice < $this->CurrentBid) {
                return "Painting '" . $this->Description . "' will be sold<br> "; //  message
            } else {
                return "Painting '" . $this->Description . "' will remain unsold<br> "; //  message
            }
        }
    }

    // creating objects with construct method 
    $Furniture = new Furniture("85 cm X 35 cm X 52", "1", "Peter", "Furniture", "Coffee table", "85", "31/03/2020", "60", array()); // information about the item and a empty array is given to later add the bid history
    $Book = new Book("William Shakespeare", "Macbeth", "2", "Ann", "Ann", "Play drama", "15", "25/03/2020", "7", array()); // information about the item and a empty array is given to later add the bid history
    $Painting1 = new Painting("Hannah Fairfield", "1839", "1800", "3", "Helen", "Painting", "Oil on Canvas", "3000", "30/04/2020", "850", array()); // information about the item and a empty array is given to later add the bid history
    $Painting2 = new Painting("Callypso", "2015", "85", "4", "Peter", "Furniture", "Pop Art", "400", "30/04/2020", "420", array()); // information about the item and a empty array is given to later add the bid history
    $Painting3 = new Painting("Goya", "1800", "9500", "5", "Wendy", "Painting", "Spanish School", "15000", "31/05/2020", "10000", array()); // information about the item and a empty array is given to later add the bid history

    echo "(3) case 1<br>";

    echo "<br>1.1<br> " . $Furniture->sold_in_askingprice();
    echo "<br>1.2<br> " . $Book->sold_in_askingprice();
    echo "<br>1.3<br> " . $Painting1->sold_in_askingprice();
    echo "<br>1.4<br> " . $Painting2->sold_in_askingprice();
    echo "<br>1.5<br> " . $Painting3->sold_in_askingprice();

    echo "<br>(4) case 2<br>";

    echo "<br>2.1<br> " . $Painting1->compare();
    echo "<br>2.2<br> " . $Painting2->compare();
    echo "<br>2.3<br> " . $Painting3->compare();

    echo "<br>(5) case 3<br>";

    echo $Furniture->addtohistory('25 January 2020', '20');
    echo $Furniture->addtohistory('31 January 2020', '28');
    echo $Furniture->addtohistory('01 February 2020', '35');
    echo $Furniture->addtohistory('10 February 2020', '45');
    echo $Furniture->addtohistory('12 February 2020', '60');
    echo $Painting1->addtohistory('20 January 2020', '550');
    echo $Painting1->addtohistory('27 January 2020', '600');
    echo $Painting1->addtohistory('15 February 2020', '850');
    echo "<br>3.1<br>";
    echo $Furniture->printhistory();
    echo "<br>3.2<br>";
    echo $Painting1->printhistory();
    ?>
</body>

</html>