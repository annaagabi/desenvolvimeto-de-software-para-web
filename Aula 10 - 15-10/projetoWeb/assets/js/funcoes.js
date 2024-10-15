function togglePassword() {
    const senhaInput = document.getElementById("senha");
    const senhaType = senhaInput.getAttribute("type");
    senhaInput.setAttribute("type", senhaType === "password" ? "text" : "password");
}