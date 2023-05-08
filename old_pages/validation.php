<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>jQuery Live Form Validation Demo</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/jquery.validate.css" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#ValidNumber").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Should be a number"
                });
                jQuery("#Email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Should be a valid Email id"
                });
                jQuery("#ValidNumber").validate({
                    expression: "if (VAL > 100) return true; else return false;",
                    message: "Should be greater than 100"
                });
                jQuery("#Mobile").validate({
                    expression: "if (VAL.match(/^[9][0-9]{9}$/)) return true; else return false;",
                    message: "Should be a valid Mobile Number"
                });
            });
            /* ]]> */
        </script>
    </head>
    <body>
        <div class="Tabs">
            <a href="#" class="Active">Simple Demo</a>
            <a href="advanced_demo">Advanced Demo</a>
        </div>
        <div class="TabBody">
            <h1>jQuery Live Form Validation Demo</h1>
            <form action="" method="post">
                <table cellpadding="3" cellspacing="2">
                    <tr>
                        <td>
                            Enter a valid number greater than 100
                        </td>
                        <td>
                            <input type="text" name="ValidNumber" id="ValidNumber" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Enter a valid Email
                        </td>
                        <td>
                            <input type="text" name="Email" id="Email" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Enter a valid Mobile Number 
                            <small>
                                (Eg: 9854398543)
                            </small>
                        </td>
                        <td>
                            <input type="text" name="Mobile" id="Mobile" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Submit" style="background: #EFEFEF;"/>
                        </td>
                    </tr>
                </table>
            </form>
            <div class="ValidXHTML">
                <a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="images/valid-xhtml.gif" alt="Valid XHTML 1.0 Transitional" border="0" /></a>
            </div>
        </div>
    </body>
</html>