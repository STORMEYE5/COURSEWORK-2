<?php
    // include common.php as it contains the header and footer... website has a constant header and footer throughout
    include ('common.php');
    
    //Ouputs the header for the page and opening body tag
    outputHeader("Customer History");
    outputNav();
?>

    <!-- Content of page -->
    <div class="history_table">
        <h1>Customer Order History</h1>

        <!-- creation of table to display details of player and high scores -->
        <table>

            <!-- table headers -->
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Date Purchased</th>
                    <th>Price</th>
                </tr>
            </thead>

            <!-- entering dummy values to show how the table will look -->
            <tbody>
                <tr>
                    <td>JS120909</td>
                    <td>12/09/23</td>
                    <td>Rs 25000</td>
                </tr>
                <tr>
                    <td>LP120304</td>
                    <td>15/07/22</td>
                    <td>Rs 12000</td>
                </tr>
                <tr>
                    <td>GH147856</td>
                    <td>14/08/22</td>
                    <td>Rs 98000</td>
                </tr>
                <tr>
                    <td>FD748563</td>
                    <td>16/05/22</td>
                    <td>Rs 8900</td>
                </tr>
                <tr>
                    <td>TY017058</td>
                    <td>08/02/22</td>
                    <td>Rs 69000</td>
                </tr>
            </tbody>
        </table>
    </div>

<?php
    // Output footer
    OutputFooter();
?>