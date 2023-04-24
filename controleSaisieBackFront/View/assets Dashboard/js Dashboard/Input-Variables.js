//! =============================== Transport =========================================
  //=============================TransportBack================================

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
  //=============================TransportFront================================
  function editTranspFront(Id_T,Type,Nbr_Pers,Date,Adresse,Nom,Tel,Message) {
    var input_Id_T = document.getElementById("Id_Tut");
    input_Id_T.value = Id_T;

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
  
  //! User =========================================

  function editUser(IdU,Username,Email,Mdp,Dob,Perm) {

    var input_IdU = document.getElementById("idu");
    input_IdU.value = IdU;

    var input_Username = document.getElementById("Usernameu");
    input_Username.value = Username;
    
    var input_Email = document.getElementById("emailu");
    input_Email.value = Email;

    var input_Mdp = document.getElementById("mdpu");
    input_Mdp.value = Mdp;

    var input_Dob = document.getElementById("dobu");
    input_Dob.value = Dob;


    var input_Perm = document.getElementById("permu");
    input_Perm.value = Perm;

  }
  //! =============================== Event =========================================

  function editEvent(idEvent,name,type,time,date,prix,nbrPlaceMax) {
    var input_idEvent = document.getElementById("idEventu");
    input_idEvent.value = idEvent;

    var input_name = document.getElementById("nameu");
    input_name.value = name;

    var input_type = document.getElementById("typeu");
    input_type.value = type;

    var input_time = document.getElementById("timeu");
    input_time.value = time;

    var input_date = document.getElementById("dateu");
    input_date.value = date;

    var input_prix = document.getElementById("prixu");
    input_prix.value = prix;

    var input_nbrPlaceMax = document.getElementById("nbrPlaceMaxu");
    input_nbrPlaceMax.value = nbrPlaceMax;

  }
  // ====================== ReservationBack =========================
  function editReservation(idReserv,idEvent,name,email,nbrPlace,num,idClient) {
  
    var input_idReserv = document.getElementById("idReservu");
    input_idReserv.value = idReserv;
    
    var input_idEvent = document.getElementById("idEventuEdit");
    input_idEvent.value = idEvent;

    var input_name = document.getElementById("nameuEdit");
    input_name.value = name;

    var input_email = document.getElementById("emailu");
    input_email.value = email;

    var input_nbrPlace = document.getElementById("nbrPlaceu");
    input_nbrPlace.value = nbrPlace;

    var input_num = document.getElementById("numu");
    input_num.value = num;

    var input_idClient = document.getElementById("idClientu");
    input_idClient.value = idClient;

  }
  //======================= ReservationFront ===============================
  function editReservFront(idReserv,name,email,nbrPlace,num) {
  
    var input_idReserv = document.getElementById("idReservu");
    input_idReserv.value = idReserv;
    
    var input_name = document.getElementById("nameu");
    input_name.value = name;

    var input_email = document.getElementById("emailu");
    input_email.value = email;

    var input_nbrPlace = document.getElementById("nbrPlaceu");
    input_nbrPlace.value = nbrPlace;

    var input_num = document.getElementById("numu");
    input_num.value = num;
  }