
function validationForm() {
    var phone = document.forms["EmergencyForm"]["phone"].value;
    var address = document.forms["EmergencyForm"]["iAddress"].value;
    var city = document.forms["EmergencyForm"]["City"].value;
    var state = document.forms["EmergencyForm"]["inputState"].value;
    var petType = document.forms["EmergencyForm"]["pettype"].value;
    var petStatus = document.forms["EmergencyForm"]["petstatus"].value;
    var photo = document.getElementById("photo");
    var date = document.forms["EmergencyForm"]["date"].value;
    var time = document.forms["EmergencyForm"]["time"].value;

    if (!validatePhone(phone) || !validateAddress(address,city,state) || !validatePets(petType,petStatus) || !validatePhoto(photo) || !validateSeen(date,time)) {
        return false;
    }
    else {
        return true;
    }
}
function validatePhone(phone) {

    var phoneRegex = /^05\d{8}$/;
    if (phone == "") {
        alert("Phone Number must be filled out");
        document.forms["EmergencyForm"]["phone"].value = "";
        return false;
    } else if (!phone.match(phoneRegex)) {
        alert("Please enter a valid phone number starting with '05' ");
        document.forms["EmergencyForm"]["phone"].value = "";
        return false;
    } else {
        return true;
    }

}


function validateAddress(address,city,state) {
    var iAddress = address;
    var City = city;
    var inputState = state;
    
    // Regular expression for validating Saudi Arabian address format
    var saudiAddressRegex = /^[0-9]+ .*$/;
    
    // Array of Saudi Arabia regions
    var saudiRegions = ["Riyadh", "Makkah", "Madinah", "Eastern Province", "Asir", "Tabuk", "Hail", "Northern Borders", "Jizan", "Najran", "Al Bahah", "Al Jawf", "Al-Qassim"];
    
    // Perform validation checks
    if (iAddress == "") {
        alert("Address must be filled out");
        return false;
    }
    if (City == "") {
        alert("City must be filled out");
        return false;
    }
    if (inputState == "") {
        alert("State must be selected");
        return false;
    }
    if (!saudiAddressRegex.test(iAddress)) {
        alert("Please enter a valid address in Saudi Arabia format:\n Address: Number Street Name");
        return false;
    }
    if (!saudiRegions.includes(inputState)) {
        alert("Please select a valid Saudi Arabia region");
        return false;
    }
    
    return true;
}


function validatePhoto(photo) {
    var Extension =/\.(png|jpg|jpeg)$/i;
    var photoFileName = photo.files[0] ? photo.files[0].name : "";

    if(!photoFileName){
        alert("Please upload a photo");
        document.forms["EmergencyForm"]["photo"].value = "";
        return false;  

    } else if (!Extension.test(photoFileName)) {
        alert("Please upload an image with one of the following extensions: png, jpg, jpeg");
        document.forms["EmergencyForm"]["photo"].value = "";
        return false;
        
    } else {
        return true;
    }
}

function validatePets(petType,petStatus) {
    if (petType == "") {
        alert("pet Type must be filled out");
        return false;
    }
    if (petStatus == "") {
        alert("pet Status must be filled out");
        return false;
    }
    return true;
}
function validateSeen(date,time) {
    if (date == "") {
        alert("Date must be filled out");
        return false;
    }
    if (time == "") {
        alert("Time must be filled out");
        return false;
    }
    return true;
}