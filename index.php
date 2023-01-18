<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Project</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous"> -->
    <link rel="stylesheet" href="lib/style.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></link>
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
  </head>
  <body>

    <div class="wrapper">
      <header>Send us a message</header>
      <form action="#">
        <div class="dbl-field">
          <div class="field">
            <input type="text" name="name" placeholder="Enter your name">
            <i class="fas fa-user"></i>
          </div>
          <div class="field">
            <input type="text" name="email" placeholder="Enter your email">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
        <div class="dbl-field">
          <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone">
            <i class="fas fa-phone-alt"></i>
          </div>
          <div class="field">
            <input type="text" name="website" placeholder="Enter your website">
            <i class="fas fa-globe"></i>
          </div>
        </div>
        <div class="message">
          <textarea name="message" placeholder="Write your message"></textarea>
          <i class="fa fa-commenting"></i>
        </div>
        <div class="button-area">
          <button type="submit">Send message</button>
          <span>Sending your message</span>
        </div>
      </form>
    </div>

    <script src="lib/script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script> -->
  </body>
</html>