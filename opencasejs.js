const RARITY = {
    milspec:    { label: 'Mil-Spec',   color: '#4b69ff', bg: '#eef0ff', text: '#3451e0' },
    restricted: { label: 'Restricted', color: '#8847ff', bg: '#f3eeff', text: '#6b32d1' },
    classified: { label: 'Classified', color: '#d32ce6', bg: '#fce8ff', text: '#a820b8' },
    covert:     { label: 'Covert',     color: '#eb4b4b', bg: '#fff0f0', text: '#c43333' },
    gold:       { label: '★ Special',  color: '#e4ae39', bg: '#fff9e6', text: '#b8880e' },
};


const SKINS = {
    chroma2: [
        { name:'Nova | Candy Apple',        wear:'Field-Tested',    rarity:'milspec',    img:'img/Chroma2.png'    },
        { name:'Glock-18 | Grinder',        wear:'Well-Worn',       rarity:'milspec',    img:'img/Chroma2.png'    },
        { name:'P250 | Valence',            wear:'Minimal Wear',    rarity:'milspec',    img:'img/Chroma2.png'    },
        { name:'MAC-10 | Neon Rider',       wear:'Minimal Wear',    rarity:'restricted', img:'img/Chroma2.png'    },
        { name:'AK-47 | Cartel',            wear:'Factory New',     rarity:'restricted', img:'img/Chroma2.png'    },
        { name:'MP7 | Nemesis',             wear:'Minimal Wear',    rarity:'classified', img:'img/Chroma2.png'    },
        { name:'FAMAS | Neural Net',        wear:'Field-Tested',    rarity:'classified', img:'img/Chroma2.png'    },
        { name:'M4A1-S | Masterpiece',      wear:'Factory New',     rarity:'covert',     img:'img/Chroma2.png'    },
        { name:'AK-47 | Vulcan',            wear:'Factory New',     rarity:'covert',     img:'img/Chroma2.png'    },
        { name:'Gut Knife | Doppler',       wear:'Factory New',     rarity:'gold',       img:'img/Chroma2.png'    },
    ],
    dangerzone: [
        { name:'R8 Revolver | Grip',        wear:'Factory New',     rarity:'milspec',    img:'img/Dangerzone.png' },
        { name:'Galil AR | Akoben',         wear:'Well-Worn',       rarity:'milspec',    img:'img/Dangerzone.png' },
        { name:'Desert Eagle | Oxide Blaze',wear:'Battle-Scarred',  rarity:'milspec',    img:'img/Dangerzone.png' },
        { name:'P90 | Freight',             wear:'Field-Tested',    rarity:'restricted', img:'img/Dangerzone.png' },
        { name:'M4A1-S | Decimator',        wear:'Minimal Wear',    rarity:'restricted', img:'img/Dangerzone.png' },
        { name:'AWP | PAW',                 wear:'Field-Tested',    rarity:'classified', img:'img/Dangerzone.png' },
        { name:'USP-S | Cortex',            wear:'Minimal Wear',    rarity:'classified', img:'img/Dangerzone.png' },
        { name:'AK-47 | Asiimov',           wear:'Factory New',     rarity:'covert',     img:'img/Dangerzone.png' },
        { name:'M4A4 | Howl',              wear:'Factory New',     rarity:'covert',     img:'img/Dangerzone.png' },
        { name:'Butterfly Knife | Fade',    wear:'Factory New',     rarity:'gold',       img:'img/Dangerzone.png' },
    ],
    dreams: [
        { name:'MP9 | Starlight Protector', wear:'Factory New',     rarity:'milspec',    img:'img/dreams2.png'    },
        { name:'Glock-18 | Vial 13',        wear:'Factory New',     rarity:'milspec',    img:'img/dreams2.png'    },
        { name:'PP-Bizon | Space Cat',      wear:'Minimal Wear',    rarity:'milspec',    img:'img/dreams2.png'    },
        { name:'MP5-SD | Necro Jr',         wear:'Well-Worn',       rarity:'restricted', img:'img/dreams2.png'    },
        { name:'XM1014 | Zombie Offensive', wear:'Field-Tested',    rarity:'restricted', img:'img/dreams2.png'    },
        { name:'USP-S | Ticket to Hell',    wear:'Factory New',     rarity:'classified', img:'img/dreams2.png'    },
        { name:'Dual Berettas | Melondrama',wear:'Minimal Wear',    rarity:'classified', img:'img/dreams2.png'    },
        { name:'AWP | Chromatic Aberration',wear:'Minimal Wear',    rarity:'covert',     img:'img/dreams2.png'    },
        { name:'M4A1-S | Night Terror',     wear:'Field-Tested',    rarity:'covert',     img:'img/dreams2.png'    },
        { name:'Karambit | Fade',           wear:'Factory New',     rarity:'gold',       img:'img/dreams2.png'    },
    ],
    fracture: [
        { name:'AK-47 | Slate',             wear:'Factory New',     rarity:'milspec',    img:'img/Fracture.png'   },
        { name:"P250 | Apep's Curse",       wear:'Well-Worn',       rarity:'milspec',    img:'img/Fracture.png'   },
        { name:'FAMAS | Decommissioned',    wear:'Field-Tested',    rarity:'milspec',    img:'img/Fracture.png'   },
        { name:'MP9 | Hydra',               wear:'Minimal Wear',    rarity:'restricted', img:'img/Fracture.png'   },
        { name:'Desert Eagle | Trigger Discipline', wear:'Minimal Wear', rarity:'restricted', img:'img/Fracture.png' },
        { name:'AWP | Silk Tiger',          wear:'Field-Tested',    rarity:'classified', img:'img/Fracture.png'   },
        { name:'Glock-18 | Bullet Queen',   wear:'Minimal Wear',    rarity:'classified', img:'img/Fracture.png'   },
        { name:'M4A4 | Tooth Fairy',        wear:'Factory New',     rarity:'covert',     img:'img/Fracture.png'   },
        { name:'AK-47 | Legion of Anubis',  wear:'Factory New',     rarity:'covert',     img:'img/Fracture.png'   },
        { name:'Stiletto Knife | Marble Fade', wear:'Factory New',  rarity:'gold',       img:'img/Fracture.png'   },
    ],
    hydra: [
        { name:'P90 | Trigon',              wear:'Factory New',     rarity:'milspec',    img:'img/Hydra.png'      },
        { name:'Galil AR | Rocket Pop',     wear:'Well-Worn',       rarity:'milspec',    img:'img/Hydra.png'      },
        { name:'CZ75-Auto | Red Astor',     wear:'Factory New',     rarity:'milspec',    img:'img/Hydra.png'      },
        { name:'MP7 | Skulls',              wear:'Minimal Wear',    rarity:'restricted', img:'img/Hydra.png'      },
        { name:'UMP-45 | Riot',             wear:'Field-Tested',    rarity:'restricted', img:'img/Hydra.png'      },
        { name:'AWP | Electric Hive',       wear:'Factory New',     rarity:'classified', img:'img/Hydra.png'      },
        { name:'Nova | Hyper Beast',        wear:'Minimal Wear',    rarity:'classified', img:'img/Hydra.png'      },
        { name:'M4A4 | Evil Daimyo',        wear:'Field-Tested',    rarity:'covert',     img:'img/Hydra.png'      },
        { name:'AK-47 | Frontside Misty',   wear:'Factory New',     rarity:'covert',     img:'img/Hydra.png'      },
        { name:'M9 Bayonet | Doppler',      wear:'Factory New',     rarity:'gold',       img:'img/Hydra.png'      },
    ],
};


const WEIGHTS = { milspec:60, restricted:22, classified:11, covert:5, gold:2 };

function rollRarity() {
    const total = Object.values(WEIGHTS).reduce((a, b) => a + b, 0);
    let r = Math.random() * total;
    for (const [key, w] of Object.entries(WEIGHTS)) {
        r -= w;
        if (r <= 0) return key;
    }
    return 'milspec';
}

function pickWinner(pool) {
    const rarity   = rollRarity();
    const filtered = pool.filter(s => s.rarity === rarity);
    const source   = filtered.length ? filtered : pool;
    return source[Math.floor(Math.random() * source.length)];
}

let selectedCase = 'chroma2';
let spinning     = false;


document.querySelectorAll('.case-card').forEach(card => {
    card.addEventListener('click', () => {
        if (spinning) return;
        document.querySelectorAll('.case-card').forEach(c => {
            c.classList.remove('ring-2', 'ring-blue-400', 'bg-blue-50');
        });
        card.classList.add('ring-2', 'ring-blue-400', 'bg-blue-50');
        selectedCase = card.dataset.case;
        renderSkinsGrid();
        resetReel();
    });
});


function renderSkinsGrid() {
    const grid   = document.getElementById('skins-grid');
    const pool   = SKINS[selectedCase];
    const order  = ['gold', 'covert', 'classified', 'restricted', 'milspec'];
    const sorted = [...pool].sort((a, b) => order.indexOf(a.rarity) - order.indexOf(b.rarity));

    grid.innerHTML = '';
    sorted.forEach(skin => {
        const r   = RARITY[skin.rarity];
        const div = document.createElement('div');
        div.className = 'p-4 border border-slate-300 rounded-2xl bg-gray-100 hover:bg-gray-200 flex flex-col items-center gap-2 cursor-default transition-colors';
        div.style.width = '148px';
        div.innerHTML = `
            <img src="${skin.img}" alt="${skin.name}" class="w-24 h-16 object-contain">
            <div class="w-10 h-1 rounded-full" style="background:${r.color}"></div>
            <div class="text-xs font-bold text-center text-slate-700 leading-tight">${skin.name}</div>
            <div class="text-xs text-slate-400 text-center">${skin.wear}</div>
            <div class="text-xs font-bold px-3 py-0.5 rounded-full"
                 style="background:${r.bg}; color:${r.text}">${r.label}</div>
        `;
        grid.appendChild(div);
    });
}
renderSkinsGrid(); 


const ITEM_W = 160; 
const TOTAL  = 60;  

function buildReelItem(skin) {
    const r   = RARITY[skin.rarity];
    const div = document.createElement('div');

    div.style.cssText = `
        flex-shrink: 0;
        width: 152px; height: 152px;
        margin: 12px 4px;
        padding: 8px 6px 6px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        background: white;
        display: flex; flex-direction: column;
        align-items: center; justify-content: flex-end;
        gap: 4px; position: relative; overflow: hidden;
    `;
    div.innerHTML = `
        <img src="${skin.img}" alt="${skin.name}"
             style="position:absolute; top:12px; left:50%; transform:translateX(-50%); width:96px; height:64px; object-fit:contain;">
        <div style="position:absolute; bottom:0; left:0; right:0; height:3px; background:${r.color}; border-radius:0 0 12px 12px;"></div>
        <div style="font-size:10px; font-weight:700; text-align:center; color:#475569; line-height:1.2; margin-top:auto; z-index:1; padding-top:72px;">
            ${skin.name}
        </div>
    `;
    return div;
}

function startOpen() {
    if (spinning) return;
    spinning = true;


    const btn = document.getElementById('open-btn');
    btn.classList.add('opacity-50', 'cursor-not-allowed');
    btn.onclick = null;


    const section = document.getElementById('roulette-section');
    section.classList.remove('hidden');
    const selectedCard = document.querySelector(`.case-card[data-case="${selectedCase}"]`);
    document.getElementById('reel-case-label').textContent = selectedCard.dataset.label + ' Case';

    const track  = document.getElementById('reel-track');
    const pool   = SKINS[selectedCase];
    const winner = pickWinner(pool);

    const winIdx = 44 + Math.floor(Math.random() * 7);


    track.innerHTML = '';
    track.style.transform = 'translateX(0)';
    for (let i = 0; i < TOTAL; i++) {
        const skin = (i === winIdx) ? winner : pool[Math.floor(Math.random() * pool.length)];
        track.appendChild(buildReelItem(skin));
    }


    section.scrollIntoView({ behavior: 'smooth', block: 'center' });

    const wrapper    = document.querySelector('.reel-wrapper');
    const wrapperMid = wrapper.offsetWidth / 2;
    const itemMid    = winIdx * ITEM_W + ITEM_W / 2;
    const nudge      = (Math.random() - 0.5) * (ITEM_W * 0.45); 
    const targetX    = -(itemMid - wrapperMid + nudge);


    const anim = track.animate(
        [
            { transform: 'translateX(0px)',         easing: 'cubic-bezier(0.05, 0.0, 0.1, 1.0)' },
            { transform: `translateX(${targetX}px)` }
        ],
        { duration: 5800, fill: 'forwards' }
    );

    anim.onfinish = () => {
        track.style.transform = `translateX(${targetX}px)`;


        const items = track.children;
        if (items[winIdx]) {
            const r = RARITY[winner.rarity];
            items[winIdx].style.border     = `2px solid ${r.color}`;
            items[winIdx].style.boxShadow  = `0 0 18px ${r.color}55`;
            items[winIdx].style.background = r.bg;
        }

        spinning = false;
        btn.classList.remove('opacity-50', 'cursor-not-allowed');
        btn.onclick = startOpen;

        showPopup(winner);
    };
}


function showPopup(skin) {
    const r = RARITY[skin.rarity];

    document.getElementById('popup-img').src          = skin.img;
    document.getElementById('popup-name').textContent = skin.name;
    document.getElementById('popup-wear').textContent = skin.wear;

    document.getElementById('popup-rarity-bar').style.background = r.color;

    const badge = document.getElementById('popup-badge');
    badge.textContent      = r.label;
    badge.style.background = r.bg;
    badge.style.color      = r.text;


    const card = document.querySelector('#popup-overlay > div');
    card.classList.remove('pop-in');
    void card.offsetWidth;
    card.classList.add('pop-in');

    document.getElementById('popup-overlay').classList.remove('hidden');

    if (skin.rarity === 'covert' || skin.rarity === 'gold') {
        spawnConfetti(r.color);
    }
}

function closePopup(openAgain) {
    document.getElementById('popup-overlay').classList.add('hidden');
    if (openAgain) setTimeout(() => startOpen(), 200);
}

function spawnConfetti(accentColor) {
    const canvas  = document.createElement('canvas');
    canvas.className = 'confetti-canvas';
    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;
    document.body.appendChild(canvas);
    const ctx = canvas.getContext('2d');

    const pieces = Array.from({ length: 90 }, () => ({
        x:     Math.random() * canvas.width,
        y:    -20 - Math.random() * 100,
        r:     2 + Math.random() * 5,
        dx:    (Math.random() - 0.5) * 4,
        dy:    2 + Math.random() * 4,
        alpha: 1,
        color: [accentColor, '#3b82f6', '#f59e0b', '#e2e8f0'][Math.floor(Math.random() * 4)],
    }));

    let frame = 0;
    (function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        pieces.forEach(p => {
            ctx.globalAlpha = Math.max(0, p.alpha);
            ctx.fillStyle   = p.color;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fill();
            p.x     += p.dx;
            p.y     += p.dy;
            p.alpha -= 0.013;
        });
        if (++frame < 130) requestAnimationFrame(draw);
        else canvas.remove();
    })();
}

function resetReel() {
    const section = document.getElementById('roulette-section');
    const track   = document.getElementById('reel-track');
    section.classList.add('hidden');
    track.innerHTML = '';
    track.style.transform = 'translateX(0)';
}