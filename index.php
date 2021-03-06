<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dipendenti OOP</title>

</head>

<body>
    <div class="container">

        <?php
        // creare 3 classi per rappresentare la seguente realta':
        // - persona
        // - dipendente
        // - boss
        // cercare inoltre di scegliere alcune variabili di istanza (max 3 o 4 per classe) che possono avere senso in questa realta' e decidere le relazione di parantela (chi estende chi);
        // per ogni classe definire eventuale classe padre, variabili di istanza, costruttore, proprieta' e toString;
        // instanziando le varie classi provare a stampare cercando di ottenere un log sensato


        class Person
        {
            private $name;
            private $lastname;
            private $dateOfBirth;

            public function __construct(
                $name,
                $lastname,
                $dateOfBirth
            ) {

                $this->setName($name);
                $this->setLastName($lastname);
                $this->setDateOfBirth($dateOfBirth);
            }
            public function getName()
            {
                return $this->name;
            }

            public function setName($name)
            {
                if (gettype($name) === 'string') {

                    return $this->name = $name;
                }
            }


            public function getLastName()
            {
                return $this->lastname;
            }

            public function setLastName($lastname)
            {
                if (gettype($lastname) === 'string') {

                    return $this->lastname = $lastname;
                }
            }
            public function getDateOfBirth()
            {
                return $this->dateOfBirth;
            }

            public function setDateOfBirth($dateOfBirth)
            {
                if (gettype($dateOfBirth) === 'string') {

                    return $this->dateOfBirth = $dateOfBirth;
                }
            }
            public function __toString()
            {
                return '<br>' . 'name: ' . $this->getName() . '<br>'
                    . 'lastname: ' . $this->getLastName() . '<br>'
                    . 'dateOfBirth: ' . $this->getDateOfBirth() . '<br>';
            }
        }


        class Dipendente extends Person
        {
            private $qualifica;
            private $ral;
            private $id;

            public function __construct($name, $lastname, $dateOfBirth, $qualifica, $ral, $id)
            {

                parent::__construct($name, $lastname, $dateOfBirth);

                $this->setQualifica($qualifica);
                $this->setRal($ral);
                $this->setId($id);
            }

            public function getQualifica()
            {
                return $this->qualifica;
            }

            public function setQualifica($qualifica)
            {
                if (gettype($qualifica) === 'string') {

                    return $this->qualifica = $qualifica;
                }
            }

            public function getRal()
            {
                return $this->ral;
            }

            public function setRal($ral)
            {
                if (gettype($ral) === 'integer') {

                    return $this->ral = $ral;
                }
            }
            public function getId()
            {
                return $this->id;
            }

            public function setId($id)
            {
                if (gettype($id) === 'integer') {

                    return $this->id = $id;
                }
            }
            public function __toString()
            {
                return parent::__toString()
                    . 'qualifica: ' . $this->getQualifica() . '<br>'
                    . 'ral: ' . $this->getRal() . '<br>'
                    . 'id: ' . $this->getId() . '<br>';
            }
        }



        class Boss extends Dipendente
        {
            private $sede;
            private $email;

            public function __construct(
                $name,
                $lastname,
                $dateOfBirth,
                $qualifica,
                $ral,
                $id,
                $sede,
                $email
            ) {
                parent::__construct(
                    $name,
                    $lastname,
                    $dateOfBirth,
                    $qualifica,
                    $ral,
                    $id
                );
                $this->setSede($sede);
                $this->setEmail($email);
            }
            public function getSede()
            {
                return $this->sede;
            }
            public function setSede($sede)
            {

                if (gettype($sede) === 'string') {

                    return $this->sede = $sede;
                }
            }
            public function getEmail()
            {
                return $this->email;
            }
            public function setEmail($email)
            {

                if (gettype($email) === 'string') {

                    return $this->email = $email;
                }
            }

            public function __toString()
            {
                return parent::__toString()

                    . 'sede: ' . $this->getSede() . '<br>'
                    . 'email: ' . $this->getEmail() . '<br>';
            }
        }


        $persona = new Person('Gianni', 'Bianchi', '1970-12-24');
        $dipendente = new Dipendente('Fiorenzo', 'Verdi', '1998-01-02', 'operaio', 20000, 2345);
        $boss = new Boss('Mario', 'Rossi', '1992-12-03', 'dirigente', 60000, 0001, 'Bologna', 'boss@gmail.com');

        echo  '<br>'
            . '<div class="item">' . '<h3>Persona</h3> '  . $persona . '</div>' . '<br>'
            . '<div class="item">' . '<h3>Dipendente</h3> ' . $dipendente . '</div>' . '<br>'
            . '<div class="item">' . '<h3>Boss</h3> '  . $boss . '</div>';

        ?>


    </div>

</body>

</html>