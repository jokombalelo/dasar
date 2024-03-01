<?php include_once "layout_top.html";?>
<div class=data>
<div class=info>Student data entry  <a class=button-26 href=data_students.php>View Students Data</a></div>
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
                    <td  width=200>First Name</td>
                    <td>:</td>
                    <td><input type=text name= id></td>
                </tr>
                <tr>
                    <td  width=200>Last Name</td>
                    <td>:</td>
                    <td><input type=text name= id></td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td>:</td>
                    <td><input type=text name= id></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <select>
                        <option value=m>Male</option>
                        <option value=f>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birthday</td>
                    <td>:</td>
                    <td>

                        <select>
                            <option>Date</option>
                            <?php for($a=1;$a<=31;$a++){ ?>
                            <option value=<?=$a?>><?=$a?></option>
                            <?php } ?>
                        </select>
                        <select>
                            <option>Month</option>
                            <?php for($a=1;$a<=12;$a++){ ?>
                            <option value=<?=$a?>><?=$a?></option>
                            <?php } ?>
                        </select>
                        <select>
                            <option>Year</option>
                            <?php for($a=2000;$a<=2020;$a++){ ?>
                            <option value=<?=$a?>><?=$a?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type=text name= id></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type=text name= id></td>
                </tr>
                <tr>
                    <td>email</td>
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
