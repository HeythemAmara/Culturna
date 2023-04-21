function generatePassword(length) {
  // Definir les caracteres a utiliser pour le mot de passe
  const chars =
    "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

  // Initialiser le mot de passe a une chaine vide
  let password = "";

  // Boucle pour ajouter des caracteres aleatoires jusqu'e la longueur specifiee
  for (let i = 0; i < length; i++) {
    const randomIndex = Math.floor(Math.random() * chars.length);
    password += chars[randomIndex];
  }

  // Renvoyer le mot de passe genere
  return password;
}

// Utilisation : generer un mot de passe de 12 caracteres
const password = generatePassword(12);
console.log(password);

window.onload = function () {
  generatePassword(8);
};
