//! Transport =========================================

  function editTransport(Id_T,IdClient,Id_Ch,Type,Nbr_Pers,Date,Adresse,Nom,Tel,Message) {
    var input_Id_T = document.getElementById("Id_Tut");
    input_Id_T.value = Id_T;

    var input_IdClient = document.getElementById("IdClientut");
    input_IdClient.value = IdClient;

    var input_Id_Ch = document.getElementById("Id_Chut");
    input_Id_Ch.value = Id_Ch;

    var input_Type = document.getElementById("Typeut");
    input_Type.value = Type;

    var input_Nbr_Pers = document.getElementById("Nbr_Persut");
    input_Nbr_Pers.value = Nbr_Pers;

    var input_Date = document.getElementById("Dateut");
    input_Date.value = Date;

    var input_Adresse = document.getElementById("adresseut");
    input_Adresse.value = Adresse;

    var input_Nom = document.getElementById("nameut");
    input_Nom.value = Nom;

    var input_Tel = document.getElementById("numut");
    input_Tel.value = Tel;

    var input_Message = document.getElementById("Noteut");
    input_Message.value = Message;

  }

//! Chauffeur =========================================

  function editChauffeur(Id_Ch,Nom,Prenom,Tel,Email,Vehicule) {

    var input_Id_Ch = document.getElementById("Id_Chu");
    input_Id_Ch.value = Id_Ch;

    var input_Nom = document.getElementById("nomu");
    input_Nom.value = Nom;
    
    var input_Prenom = document.getElementById("prenomu");
    input_Prenom.value = Prenom;

    var input_Tel = document.getElementById("telu");
    input_Tel.value = Tel;

    var input_Email = document.getElementById("emailu");
    input_Email.value = Email;

    var input_Vehicule = document.getElementById("vehiculeu");
    input_Vehicule.value = Vehicule;

  }
  