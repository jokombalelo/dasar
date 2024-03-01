<?php include_once "layout_top.html";?>

<div class=data>
    <div class=info>Operators data entry  <a class=button-26>View Operators</a></div>
    <form action="/register" method="post">
        <table class="blueTable">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3"></td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td width=200>Name of trash</td>
                    <td>:</td>
                    <td><input type=text name= id></td>
                </tr>
                <tr>
                    <td>Kind of trash</td>
                    <td>:</td>
                    <td>
                        <select>
                        <option value=big>Big</option>
                        <option value=middle>Female</option>
                        <option value=small>Small</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Point of Trash</td>
                    <td>:</td>
                    <td><input type=text name= id></td>
                </tr>
                <tr>
                    <td colspan=3><center><button class="button-37" role="button">Submit</button></center></td>
                </tr>
            </tbody>
        </table>
    </form>

    </div>
<?php include_once "layout_bottom.html";?>
