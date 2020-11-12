   $table->id();
            $table->string("first_name", 100);
            $table->string("last_name", 100);
            $table->string("telephone", 11);
            $table->string("email", 100);
            $table->timestamps();
            $table->string("address_1");
            $table->string("address_2")->nullable();
            $table->string("town");
            $table->string("postcode");
            

$owner = new Owner();
$owner->first_name = "Penelope";
$owner->last_name = "Potter";
$owner->telephone = "07855563214";
$owner->email = "penpot@live.com";
$owner->address_1 = "8888 Lane Lane";
$owner->address_2 = "Frog's Spawn";
$owner->town = "Wolverhampton";
$owner->postcode = "GH53 8LL";
$owner->save();

$owner = new Owner();
$owner->first_name = "Dustin";
$owner->last_name = "Doggo";
$owner->telephone = "07855464668";
$owner->email = "dddd@hotmail.fr";
$owner->address_1 = "1 Lemur Drive";
$owner->town = "Mars";
$owner->postcode = "MMMM MMM";
$owner->save();

$owner = new Owner();
$owner->first_name = "Francis";
$owner->last_name = "Renaissance";
$owner->telephone = "07800003214";
$owner->email = "renny@hotmail.co.uk";
$owner->address_1 = "9090 Forest Lane";
$owner->town = "Forest";
$owner->postcode = "GUMP 8KN";
$owner->save();

$owner = new Owner();
$owner->first_name = "Yolanda";
$owner->last_name = "Tulip";
$owner->telephone = "07855518814";
$owner->email = "tulipz@live.com";
$owner->address_1 = "4 Florist Close";
$owner->address_2 = "Magnolia Range";
$owner->town = "Daisyville";
$owner->postcode = "KJ67 0PL";
$owner->save();

$owner = new Owner();
$owner->first_name = "Git";
$owner->last_name = "Hub";
$owner->telephone = "07444444444";
$owner->email = "gitwithwit@live.co.uk";
$owner->address_1 = "15 The Matrix";
$owner->address_2 = "Binary Road";
$owner->town = "Nodes";
$owner->postcode = "YU90 101";
$owner->save();

$owner = ...
$owner->address_2 = "Photosynthesis Avenue";
$owner->town = "Forest Grove";

$telephone = '07827999488';
$section1 = Str::substr($telephone, 0, 5);
$section2 = Str::substr($telephone, 5, 3);
$section3 = Str::substr($telephone, 8, 3);
$telephone = ($section1 . " " . $section2 . " " . $section3);

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }