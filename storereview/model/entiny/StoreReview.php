
<?php 

 
class Product {

    //Magic string
    public static string $USERNAME = "Default Username"; 
    public static string $EMAIL = "default@example.com";
    public static string $MESSAGE = "Default message";
    public static int $MIN_CHARACTERS_NAME = 3;
    public static int $MAX_CHARACTERS_NAME= 100;


    private int $id;
    private string $username;
    private string $email;
    private string $message;


	
    public function __construct(string $username, string $email, string $message) {

       $this->id = rand();

       $this->username = $username; 

       $this->email = $email;

       $this->message = $message ?: StoreReview::$DEFAULT_MESSAGE;




    }


    public function validateUserName($username): void {
        $usernameLength = strlen($username);

        if ($usernameLength < StoreReview::$MIN_CHARACTERS_NAME || $usernameLength > StoreReview::$MAX_CHARACTERS_NAME) {
            throw new Exception("USERNAME doit contenir entre " . StoreReview::$MIN_CHARACTERS_NAME . " et " . StoreReview::$MAX_CHARACTERS_NAME . " caractères.");

        }
    }


}
//pour tetourner nous valeurs
    //public function getUsername(): string {
     //    return $this->title;
   // }

     //public function getPrice(): float {
     //    return $this->price;
     //}

     //public function getDescription(): string {
     //    return $this->description;
     //}

     //public function getStatus(): string {
      //   return $this->status ? 'Actif' : 'Désactivé';
     //}


