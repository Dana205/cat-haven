const currentURL = window.location.href;
const pageTitle = document.title;

var copiedDiv =document.getElementById('copied');

document.getElementById('share-link').addEventListener('click', (event) => {
    event.preventDefault();
    if (navigator.share) {
        navigator.share({
            title: pageTitle,
            url: currentURL
        }).then(() => {
            // console.log('Thanks for sharing!');
        }).catch(console.error);
    } else {
        // Fallback for browsers that don't support the Web Share API
        copiedDiv.setAttribute("hidden","true");
        const tempInput = document.createElement('input');
        tempInput.value = currentURL;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        setTimeout(() => {
            copiedDiv.removeAttribute("hidden");
        }, 100); // تأخير 
        setTimeout(() => {
            copiedDiv.setAttribute("hidden","true");
        }, 1500); // تأخير 
    }
});

document.getElementById('share-whatsapp').addEventListener('click', (event) => {
    event.preventDefault();
    setTimeout(() => {
            window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(pageTitle + ' ' + currentURL)}`, '_blank');
        }, 100); // تأخير 
});

document.getElementById('share-twitter').addEventListener('click', (event) => {
    event.preventDefault();
    setTimeout(() => {
            window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(currentURL)}&text=${encodeURIComponent(pageTitle)}`, '_blank');
        }, 100); // تأخير 
});

document.getElementById('share-facebook').addEventListener('click', (event) => {
    event.preventDefault();
    setTimeout(() => {
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(currentURL)}`, '_blank');
        }, 100); // تأخير 
});





