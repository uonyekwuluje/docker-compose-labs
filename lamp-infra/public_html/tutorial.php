<!DOCTYPE html>
<html>
<body>
   <?php
       require './vendor/autoload.php';
       use Unleash\Client\UnleashBuilder;

       $unleash = UnleashBuilder::create()
          ->withAppName('PHP-Test-FFlag')
          ->withAppUrl('http://192.168.1.127:4242/api')
          ->withInstanceId('phpAppTestId')
          ->withHeader('Authorization', 'default:development.1f4ea6295e930f196aa4bd2019ffe0905e69bf632decf9650e417435')
          ->build();

       echo "My first PHP script!";
       echo "<br>";
       if ($unleash->isEnabled('php-test')) {
          echo "PHP Version => ";
          echo phpversion();
       } 
   ?>
</body>
</html>

