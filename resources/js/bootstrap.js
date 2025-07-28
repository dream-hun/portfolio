import axios from "axios";
import Alpine from "alpinejs";
import ui from "@alpinejs/ui";
import focus from "@alpinejs/focus";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Alpine = Alpine;

Alpine.plugin(ui);
Alpine.plugin(focus);

Alpine.start();
