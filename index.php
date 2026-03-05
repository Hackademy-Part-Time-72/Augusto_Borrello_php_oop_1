<!-- PRIMO PUNTO
 Creo una classe Company con le seguenti proprietà: name, location, tot_employees.

 Classe → Company
Oggetti → Aulab, Google, Apple -->
<!-- 

class Company {

    public $name;
    public $location;
    public $tot_employees = 0;

} -->

<!-- SECONDO PUNTO
 Creo un metodo companyInfo() che stampa a schermo le informazioni dell'azienda,
 se il numero di dipendenti è maggiore di 0, altrimenti stampa un messaggio che indichi che l'azienda non ha dipendenti. -->
 
 <!-- //3 P. creo una classe Company e poi creo 5 oggetti di tipo Company, 
  // assegnando a ciascuno un nome, una location e un numero di dipendenti totali e uno stipendio medio. 
  // Infine, stampo a schermo le informazioni di 2 aziende a scelta. -->
                                     
 <!-- 4.P Metodo che calcola spesa
Qui creiamo un metodo con parametro mesi che calcola la spesa totale dell'azienda in base al numero di dipendenti, 
allo stipendio medio e al numero di mesi. successivamente, creiamo un metodo che stampa a schermo la spesa totale 
dell'azienda in base al numero di mesi. -->

<!-- 5.P. ceao un metodo static che sarà dui condivisione con tute le aziende. per fare ciò abbiamo bisogno di un contatore statico 
that tenga traccia del numero di aziende create. ogni volta che viene creata una nuova azienda, il contatore aumenta di 1.  creo sia , metodo che attributo-->

<?php

$company1 = new Company("Aulab","Italia",50,2000);
$company2 = new Company("Google","USA",100000,4000);
$company3 = new Company("Amazon","USA",200000,3500);
$company4 = new Company("Spotify","Svezia",9000,3000);
$company5 = new Company("StartupX","Italia",0,1500);


class Company {

    public $name;
    public $location;
    public $tot_employees = 0;
    public $avg_salary;

    public static $company_counter = 0;
    public static $total_costs = [];
    
    // costruttore
    public function __construct($name,$location,$tot_employees,$avg_salary){
        
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->avg_salary = $avg_salary;
        
        self::$company_counter++;
        
        }
        // info azienda
        public function companyInfo(){
            
            if($this->tot_employees > 0){
                
                echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti\n";
                
                } else {
                    
                    echo "L'ufficio $this->name con sede in $this->location non ha dipendenti\n";
                    
                    }
        }
        // calcolo spesa 

    public function getCompanyCost($months){
                        
        $salary_cost = $this->tot_employees * $this->avg_salary * $months;
                        
                        
        return $salary_cost;
                        
        }
        // stampo spese
                        
    public function printCompanyCost($months){
                            
        $cost = $this->getCompanyCost($months);
                            
        echo "L'azienda $this->name spenderà $cost euro in $months mesi\n";
                            
        self::$total_costs[] = $cost;
        }

         // aziende create 

    public static function getCompanyCounter(){
            
        echo "Sono state create " . self::$company_counter . " aziende\n";
            
        }

        // media costi
                        
                        
                                    
    public static function getAverageCost(){

       if(count(self::$total_costs) > 0){

        $avg = array_sum(self::$total_costs) / count(self::$total_costs);

        echo "Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di $avg all'anno\n";

          } else {

        echo "Non ci sono ancora dati sui costi delle aziende\n";

       }

     }
   }
            // TEST
   
   $company1->companyInfo();
   $company5->companyInfo();
   
   $company1->printCompanyCost(12);
   $company2->printCompanyCost(12);
   
   Company::getCompanyCounter();
   
   Company::getAverageCost();
                
                    
                    
                                
                                    

                                    
 // $company1 = new Company();                                                         
// $company1->name = "Aulab";
 // $company1->location = "Italia";
 // $company1->tot_employees = 50;
 // $company1->avg_salary = 2000;
                                    
                                    
// $company2 = new Company(); 
// $company2->name = "Google";
// $company2->location = "USA";
// $company2->tot_employees = 100000
// $company2->avg_salary = 4000;
                                    
// $company3 = new Company();
// $company3->name = "Amazon";
// $company3->location = "USA";
// $company3->tot_employees = 200000;
// $company3->avg_salary = 3500;
                                    
// $company4 = new Company();
// $company4->name = "Spotify";
// $company4->location = "Svezia";
// $company4->tot_employees = 9000;
// $company4->avg_salary = 3000;
                                    
// $company5 = new Company();
// $company5->name = "StartupX";
// $company5->location = "Italia";
// $company5->tot_employees = 0;
// $company5->avg_salary = 1500;
                                
                       
                                    
                                   


