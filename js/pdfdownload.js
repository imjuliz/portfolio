//javascript para fazer o download do curriculo

    console.log('Script carregado'); // log para verificar se o script está sendo carregado

    setTimeout(() => {
        document.querySelectorAll('.btn-download').forEach(button => {
            console.log('Botão encontrado:', button); // Log quando o botão é encontrado
            button.addEventListener('click', function() {
                console.log('Botão clicado'); // Log quando o botão é clicado
                const pdfUrl = this.getAttribute('data-pdf');
                if (pdfUrl) {
                    console.log('URL do PDF:', pdfUrl); // Log da URL do PDF
                    const link = document.createElement('a');
                    link.href = pdfUrl;
                    link.download = pdfUrl.split('/').pop();
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                } else {
                    console.error('URL do PDF não encontrada.');
                }
            });
        });
    }, 1000);