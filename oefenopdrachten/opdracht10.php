<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdracht 10</title>
  </head>
  <body>
    <?php
    class User {
        protected $_username;

          public function __construct($name) {
            $this->_username = $name;
        }

        public function getUsername() {
            return $this->_username;
        }
    }

    class Customer extends User {
        private $_customerId;

        public function __construct($username, $customerId) {
            $this->_username = $username;
            $this->_customerId = $customerId;
        }

        public function getUsername() {
            if($this->_username == 'Jeffrey') {
                return parent::getUsername();
            }
            else {
                return 'De gebruikersnaam is: '.$this->_username;
            }
        }
    }

    $jan = new Customer('Jeffrey', 1);
    $inge = new Customer('Jordan', 2);

    echo $jan->getUsername(). '<br />' .$inge->getUsername();
    ?>
  </body>
</html>
