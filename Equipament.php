<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

            class Equipament{

                public $id;
                public $name; 
                public $antiquity;
                public $dimension_long; 
                public $dimension_wide; 
                public $weight;
                public $image; 
                public $icon; 
                public $description;

                function __construct($id="", $name="", $antiquity="", $dimension_long="", $dimension_wide="", $weight="", $image="", $icon="", $description=""){
                    $this->id = $id;
                    $this->name = $name;
                    $this->antiquity = $antiquity;
                    $this->dimension_long = $dimension_long;
                    $this->dimension_wide = $dimension_wide;
                    $this->weight = $weight;
                    $this->image = $image;
                    $this->icon = $icon;
                    $this->description = $description;
                }
            };
            
            class Arch extends Equipament {

                public $wood;
                public $arrow;
            
                function __construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description, $wood, $arrow){
                    parent::__construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description);
                    $this->wood = $wood;
                    $this->arrow = $arrow;
                }
            }

            class Sword extends Equipament {

                public $blade;
                public $handle;
            
                function __construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description, $blade, $handle){
                    parent::__construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description);
                    $this->blade = $blade;
                    $this->handle = $handle;
                }
            }

            class Helmet extends Equipament {

                public $form;
                public $protection;
            
                function __construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description, $form, $protection){
                    parent::__construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description);
                    $this->form = $form;
                    $this->protection = $protection;
                }
            }

            class Axe extends Equipament {

                public $material;
                public $hands;
            
                function __construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description, $material, $hands){
                    parent::__construct($id, $name, $antiquity, $dimension_long, $dimension_wide, $weight, $image, $icon, $description);
                    $this->material = $material;
                    $this->hands = $hands;
                }
            }
    ?>
</body>
</html>