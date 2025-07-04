import preset from "../../../vendor/filament/filament/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./vendor/awcodes/overlook/resources/**/*.blade.php",
        // "./vendor/awcodes/filament-curator/resources/**/*.blade.php",
        // "./vendor/awcodes/filament-quick-create/resources/**/*.blade.php",
        // './vendor/jaocero/radio-deck/resources/views/**/*.blade.php',
        // "./resources/views/vendor/**/*.blade.php",
        // './vendor/kenepa/banner/resources/**/*.php',
    ],
};
