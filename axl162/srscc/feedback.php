<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact the Staff Research Students Consultative Committee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

        label.valid {
          width: 0px;
          height: 0px;
/*          background: url(assets/img/valid.png) center center no-repeat; */
          display: none;
        }
        label.error {
            font-weight: bold;
            color: red;
            padding: 2px 8px;
            margin-top: 2px;
        }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../js/chosen.css" rel="stylesheet">
    <link href="../js/bootstrap-chosen.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <div class="container-narrow">

      <div class="row">

        <div class="well">
          <h1>Contact the SRSCC</h1>
          <hr/>
          <p class="lead">The Staff Research Student Consultative Committee is meant "to provide a forum for consultation and discussion between research student representatives and staff responsible for research supervision on all relevant matters affecting students within the School" (<a href="https://www.cs.bham.ac.uk/internal/staff/handbook/Management.php#srscc">see more</a>).</p>  
          <p class="lead">Research students and Staff members are encouraged to send issues, suggestions and comments to the SRSCC, through this page.</p>
        </div>
<?php
$message = <<<XML
A new feedback message has been submitted on:
http://cs.bham.ac.uk/~axl162/srscc/feedback.php

Sender name: %s
Sender email address: %s
Subject: %s

Message
-------
%s
XML;

if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
      //
  $email = $_REQUEST['email'] or "Apache <apache@cs.bham.ac.uk>";
  $subject = "[SRSCC-feedback] " . $_REQUEST['subject'];
  $fullmessage = sprintf($message, $_REQUEST['fullname'], $email, $_REQUEST['subject'], $_REQUEST['message']);
  echo "The message was sent correctly.<br/>";
  $to = "";
  foreach ($_REQUEST['to'] as $prefix) {
      $fullemail = $prefix."@cs.bham.ac.uk,";
      $to .= $fullemail;
  }
  //echo $to;
  mail($to, $subject, $fullmessage);
  }
else
//if "email" is not filled out, display the form
  {
      echo <<<EOT
        <section class="span8">

          <form method="post" id="form">

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-user"></i> Full Name (optional)</label>
              <div class="controls controls-row">
                <input type="text" class="input-xxlarge" id="inputEmail" placeholder="Your name. You can leave it empty if you prefer." name="fullname">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email (optional)</label>
              <div class="controls">
                <input type="text" class="input-xxlarge" id="inputEmail" placeholder="you@yourdomain.com" name="email">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-question-sign"></i> Subject (required)</label>
              <div class="controls">
                <input type="text" class="input-xxlarge" id="inputSubject" placeholder="Subject" name="subject">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-pencil"></i> Message (required)</label>
              <div class="controls">
                <textarea rows="6" id ="msg" class="input-xxlarge" placeholder="Suggestions? Issues? Comments?" name="message"></textarea>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-eye-open"></i> Recipients (at least one)</label>
              <div class="controls">
                  <select id="id_to" class="select-chosen" multiple style="width: 100%" name="to[]" data-placeholder="Members of the SRSCC who will receive the message" >
                    <option value="j.t.saxon">John Saxon - Year 1 students rep</option>
                    <option value="a.lima">Antonio Lima - Year 2 students rep, chair</option>
                    <option value="c.a.harris.1">Catherine Harris - Year 3 students rep</option>
                    <option value="m.s.rowan">Mark Rowan - Other years students rep</option>
                    <option value="j.young">Jay Young - Reserch Committee rep</option>
                    <option value="l.mancini">Loretta Mancini - International Students rep</option>
                    <option value="p.a.sliwa">Patrycja Sliwa - Secretary</option>
                    <option value="s.j.vickers">Steve Vickers - Research Students Tutor, vice-chair</option>
                    <option value="hos">Jon Rowe - Head of School</option>
                  </select>
              </div>
            </div>

            <p>
              <i class="icon-info-sign"></i> <small>The message will be sent to the selected members using their School email addresses.</small>
            </p>

            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-success">Send Message</button>
              </div>
            </div>

          </form>
          <br class="clear">
                
        </section><!-- end left -->

        <section class="span6">
        </section><!--end right --> 
EOT;
  }
?>

      </div><!--end row -->

      <hr>

      <footer>
        <p><small><a href="http://cs.bham.ac.uk/~axl162">A Lima</a> 2013 - Made with <a href="http://twitter.github.io/bootstrap/">Bootstrap</a></small></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/chosen.jquery.min.js"></script>
    <script>
        $('.select-chosen').chosen();

var validator = $('#form').validate(
{
    rules: {
        "fullname": {
            "maxlength": 100,
        },
        "email": "email",
        "subject": "required",
        "message": "required",
        "to[]": "required",
    },
    ignore: ':hidden:not(.chzn-done)',
    submithandler: function(form) {
        form.submit();
    },
    highlight: function(element) {
        $(element).closest('.control-group').addClass('error');
    },
    success: function(element) {
        $(element).closest('.control-group').removeClass('error');
        //element.parent().removeClass('error').parent().removeClass('error');
        element.remove();
    }
});
var checkerrors = function() {
            validator.form();
                };
var chosen = $('#id_to').chosen().change(checkerrors);
    </script>
  </body>
</html>

<!--
<form method='post' action='prova.php'>
  Email: <input name='email' type='text'><br> Subject: <input name='subject' type='text'><br>
  Message:<br>
  <textarea name='message' rows='15' cols='40'>
  </textarea><br>
  <input type='submit'>
  </form>;
  }
-->
</body>
</html> 
