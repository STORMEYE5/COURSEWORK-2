<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include ('common.php');
$title = "Customer History";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>
  <div class="leaderboard">
        <h1>Customer Order History</h1>
        <!-- creation of table to display details of player and high scores -->
        <table>
            <thead>
                <tr>
                    <!-- table headers -->
                    <th>Customer ID</th>
                    <th>Date Purchased</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- entering dummy values to show how the table will look once game will be implemented -->
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

            </tbody>
        </table>
    </div>


<?php
OutputFooter();
?>