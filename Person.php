<?php
    class Person
    {
        private $firstName;
        private $lastName;
        private $birthTimestamp;

        function setFirstName ($firstName)
        {
            $this->firstName = $firstName;
        }

        function getFirstName ()
        {
            return $this->firstName;
        }

        function setLastName ($lastName)
        {
            $this->lastName = $lastName;
        }

        function getLastName ()
        {
            return $this->lastName;
        }

        function setName ($name)
        {
            $name = explode(" ", $name);
            $this->setFirstName($name[0]);
            $this->setLastName($name[1]);
        }

        function getName ()
        {
            $name = "{$this->getFirstName()} {$this->getLastName()}";

            return $name;
        }

        function setBirthTimestamp ($birthTimestamp)
        {
            $this->birthTimestamp = $birthTimestamp;
        }

        function getBirthTimestamp ()
        {
            return $this->birthTimestamp;
        }

        function setBirthday ($birthday)
        {
            $this->setBirthTimestamp(strtotime($birthday));
        }

        function getBirthday ()
        {
            $birthday = date("d.m.", $this->getBirthTimestamp());

            return $birthday;
        }
    }
?>