# Selfwork PHP OOP 1

Repository contenente l'esercizio di programmazione a oggetti (OOP) svolto durante il corso Hackademy.

## Obiettivo dell'esercizio

Creare una classe `Company` che rappresenti un'azienda e gestire:

- informazioni sull'azienda
- numero di dipendenti
- stipendio medio
- calcolo dei costi aziendali
- conteggio delle aziende create
- calcolo della spesa media del gruppo

## Classe Company

La classe contiene i seguenti attributi:

- `name` → nome dell'azienda
- `location` → sede dell'azienda
- `tot_employees` → numero totale di dipendenti
- `avg_salary` → stipendio medio dei dipendenti

### Attributi statici

- `company_counter` → conta quante aziende sono state create
- `total_costs` → salva i costi delle aziende per calcolare la media

## Metodi implementati

### `companyInfo()`
Stampa le informazioni dell'azienda.

Esempio:L'ufficio Aulab con sede in Italia ha ben 50 dipendenti oppure 
oppure
L'ufficio StartupX con sede in Italia non ha dipendenti

---

### `getCompanyCost($months)`

Calcola il costo aziendale in base a:

- numero dipendenti
- stipendio medio
- numero di mesi

---

### `printCompanyCost($months)`

Stampa il costo dell'azienda per un determinato numero di mesi.

Esempio:L'ufficio Aulab con sede in Italia ha ben 50 dipendenti


---

### `getCompanyCounter()`

Metodo statico che stampa quante aziende sono state create.

Esempio: Sono state create 5 aziende 


---

### `getAverageCost()`

Metodo statico che calcola la spesa media delle aziende del gruppo.

Esempio:Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di XXXXX all'anno


---

## Aziende create nel test

Nel file sono state create 5 aziende:

- Aulab
- Google
- Amazon
- Spotify
- StartupX

---

## Tecnologie utilizzate

- PHP
- Programmazione a Oggetti (OOP)

---

## Autore

Augusto Borrello  
Hackademy Part Time 72


