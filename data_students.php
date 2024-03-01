<?php include_once "layout_top.html";?>
<div class=data>
<div class=info>Student data entry  <a class=button-26>View Students Data</a></div>
<form action="/register" metdod="post">
        <table class="blueTable">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>First Name</th>
                    <th>Last name</th>
                    <th>Class</th>
                    <th>Gender</th>
                    <th>Date of Birthday</th>
                    <th>E-mail</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Eko</td>
                    <td>Cakep</td>
                    <td>XII IPA 1</td>
                    <td>Male</td>
                    <td>2/2/200</td>
                    <td>aku@gmail.com</td>
                    <td>
                        <button class="button-8">Edit</button> |
                        <button class="button-8">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<?php include_once "layout_bottom.html";?>
