function confirmarDelete(event, obj) {
    event.preventDefault();
    if (confirm("Tem certeza que deseja realizar essa operacao?")) {
        window.location.href = obj.href;
    }
}