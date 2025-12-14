// Ewit LMS - Registration Page Scripts (intl-tel-input)

document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.querySelector("#phone");
    const phoneFullInput = document.querySelector("#phone_full");
    
    if (phoneInput && phoneFullInput) {
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "lk",
            preferredCountries: ["lk", "in", "ae", "gb", "us"],
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
        });

        // Update hidden input with full number on form submit
        document.querySelector(".register-form").addEventListener("submit", function() {
            phoneFullInput.value = iti.getNumber();
            phoneInput.name = "";
            phoneFullInput.name = "phone";
        });
    }
});
