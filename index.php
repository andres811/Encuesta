<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            td{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php include "Constants.php"?>
        
        <form action="controller.php" method="post">
            <table>
                <tr>
                    <td>Peñarol:</td>
                    <td><input type="radio" name="radPoll" value="<?php echo Team::penarol?>" required></td>
                </tr>
                <tr>
                    <td>Nacional:</td>
                    <td><input type="radio" name="radPoll" value="<?php echo Team::nacional?>"></td>
                </tr>
                <tr>
                    <td>Defensor:</td>
                    <td><input type="radio" name="radPoll" value="<?php echo Team::defensor?>"></td>
                </tr>
                <tr>
                    <td>Danubio:</td>
                    <td><input type="radio" name="radPoll" value="<?php echo Team::danubio?>"></td>
                </tr>
                <tr>
                    <td>Otros:</td>
                    <td><input type="radio" name="radPoll" value="<?php echo Team::otros?>"></td>
                </tr>
                
            </table>
            <input type="submit" value="Enviar">
            <input type="hidden" value="vote" name="action">
        </form>
        <?php?>
    </body>
</html>
