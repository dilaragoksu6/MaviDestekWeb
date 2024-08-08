// toolbar.js

// Navbarı oluşturmak için gereken kodlar
function createNavbar() {
    const navbar = document.createElement('div');
    navbar.classList.add('navbar');

    const logo = document.createElement('img');
    logo.src = 'resimler/logo.png';
    logo.classList.add('logo');

    const ul = document.createElement('ul');
    const menuItems = ['Ana Sayfa', 'LÖSEMİ', 'SMA', 'Hakkımızda', 'İletişim'];

    for (let i = 0; i < menuItems.length; i++) {
        const li = document.createElement('li');
        const a = document.createElement('a');
        if (i === 0) {
            a.href = 'index.html'; // Ana Sayfa linkini index.html'e yönlendir
        } else if (i === 1) {
            a.href = 'losev.html'; // LÖSEV linkini Google'a yönlendir
        } else if (i === 2) {
            a.href = 'sma.html'; // SMA linkini YouTube'a yönlendir
        }
        else if (i === 3) {
            a.href = 'hakkimizda.html'; // hakkımızda
        }
        else if (i === 4) {
            a.href = 'iletisim.php'; // iletisim
        } else {
            a.href = '#';
        }
        a.textContent = menuItems[i];
        li.appendChild(a);
        ul.appendChild(li);
    }

    // Mevcut navbarın içine dropdown menüyü eklemek için aşağıdaki kodu kullanın:
    const dropdownLi = document.createElement('li');
    dropdownLi.classList.add('nav-item', 'dropdown');

    const dropdownToggle = document.createElement('a');
    dropdownToggle.classList.add('nav-link', 'dropdown-toggle');
    dropdownToggle.href = '#';
    dropdownToggle.setAttribute('role', 'button');
    dropdownToggle.setAttribute('data-bs-toggle', 'dropdown');
    dropdownToggle.setAttribute('aria-expanded', 'false');
    dropdownToggle.textContent = 'NELER YAPABİLİRSİNİZ ?';

    const dropdownMenu = document.createElement('ul');
    dropdownMenu.classList.add('dropdown-menu');

    const dropdownItems = [
        { text: 'Gönüllü Olmak', href: 'gonullu.php' },
        { text: 'Bağış Yapmak', href: 'bagis.php' }

    ];

    dropdownItems.forEach(item => {
        const dropdownItem = document.createElement('li');
        if (item.divider) {
            const divider = document.createElement('hr');
            divider.classList.add('dropdown-divider');
            dropdownItem.appendChild(divider);
        } else {
            const dropdownLink = document.createElement('a');
            dropdownLink.classList.add('dropdown-item');
            dropdownLink.href = item.href;
            dropdownLink.textContent = item.text;
            dropdownItem.appendChild(dropdownLink);
        }
        dropdownMenu.appendChild(dropdownItem);
    });

    dropdownLi.appendChild(dropdownToggle);
    dropdownLi.appendChild(dropdownMenu);

    ul.appendChild(dropdownLi);
    // Mevcut navbarın içine dropdown menüyü eklemek için yaptığımız değişiklikler burada sonlanır.

    navbar.appendChild(logo);
    navbar.appendChild(ul);

    return navbar;
}

// HTML içine navbarı yerleştirme
function insertNavbar() {
    const body = document.querySelector('body');
    const navbar = createNavbar();
    body.prepend(navbar);
}

// Sayfa yüklendiğinde navbarı ekleme
window.addEventListener('DOMContentLoaded', insertNavbar);
