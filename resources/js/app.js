document.addEventListener('DOMContentLoaded', () => {
  // Mobile navigation toggling
  const mobileBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }

  // Floating Customer Service Chat interaction
  const chatLauncher = document.getElementById('chatLauncher');
  const chatPopover = document.getElementById('chatPopover');
  const closeChatBtn = document.getElementById('closeChatBtn');
  const chatForm = document.getElementById('chatForm');
  const chatInput = document.getElementById('chatInput');
  const dynamicMessages = document.getElementById('dynamicMessages');

  function toggleChat(forceOpen = null) {
    const isCurrentlyHidden = chatPopover.classList.contains('hidden');
    const shouldOpen = forceOpen !== null ? forceOpen : isCurrentlyHidden;

    if (shouldOpen) {
      chatPopover.classList.remove('hidden');
      setTimeout(() => {
        chatPopover.classList.remove('scale-95', 'opacity-0');
        chatPopover.classList.add('scale-100', 'opacity-100');
      }, 10);
      chatInput.focus();
    } else {
      chatPopover.classList.remove('scale-100', 'opacity-100');
      chatPopover.classList.add('scale-95', 'opacity-0');
      setTimeout(() => {
        chatPopover.classList.add('hidden');
      }, 300);
    }
  }

  if (chatLauncher) {
    chatLauncher.addEventListener('click', () => toggleChat());
  }

  if (closeChatBtn) {
    closeChatBtn.addEventListener('click', () => toggleChat(false));
  }

  function scrollToBottom() {
    const scrollContainer = dynamicMessages.parentElement;
    scrollContainer.scrollTop = scrollContainer.scrollHeight;
  }

  // Append User Message
  function appendUserMessage(text) {
    const msgDiv = document.createElement('div');
    msgDiv.className = 'flex justify-end';
    msgDiv.innerHTML = `
      <div class="bg-madjoe text-white p-3 rounded-2xl rounded-tr-none shadow-sm max-w-[80%] text-xs font-medium">
        ${text}
      </div>
    `;
    dynamicMessages.appendChild(msgDiv);
    scrollToBottom();
  }

  // Append Barista Response
  function appendBaristaResponse(text) {
    const botDiv = document.createElement('div');
    botDiv.className = 'flex gap-2';
    botDiv.innerHTML = `
      <div class="w-7 h-7 rounded-full bg-madjoe text-white flex items-center justify-center flex-shrink-0 text-[10px]">
        <i class="fa-solid fa-mug-hot"></i>
      </div>
      <div class="bg-white p-3 rounded-2xl rounded-tl-none border border-neutral-200 shadow-sm max-w-[80%] text-neutral-800">
        <p>${text}</p>
      </div>
    `;
    dynamicMessages.appendChild(botDiv);
    scrollToBottom();
  }

  // Quick Reply Action (dipanggil dari atribut onclick di HTML)
  window.sendQuickReply = function (replyText) {
    appendUserMessage(replyText);
    setTimeout(() => {
      if (replyText.includes('kemitraan')) {
        appendBaristaResponse("Terima kasih atas ketertarikan Anda! Untuk kemitraan dan proposal franchise Madjoe, silakan hubungi tim kami via WhatsApp di +62 811-5701-402 atau tim ekspansi kami siap mengirimkan detail ROI.");
      } else if (replyText.includes('menu terlaris')) {
        appendBaristaResponse("Menu paling favorit teman-teman adalah <strong>Kopi Susu Madjoe Aren</strong> dan <strong>Matcha Macchiato</strong>! Silakan cek section menu di atas ya kak! ✨");
      } else {
        appendBaristaResponse("Saat ini Madjoe memiliki 53+ outlet di Pontianak, Jabodetabek, Bandung, dan kota lainnya. Kunjungi outlet terdekat kami!");
      }
    }, 700);
  };

  // Open chat with custom prefill context (e.g. from banner CTA)
  window.openChatWithContext = function (text) {
    toggleChat(true);
    setTimeout(() => {
      window.sendQuickReply(text);
    }, 400);
  };

  // Handle Form Submit
  if (chatForm) {
    chatForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const msg = chatInput.value.trim();
      if (msg) {
        appendUserMessage(msg);
        chatInput.value = '';
        setTimeout(() => {
          appendBaristaResponse("Pesan diterima! Barista kami akan segera merespons via sistem atau Anda dapat langsung menghubungkan obrolan ke WhatsApp resmi kami.");
        }, 800);
      }
    });
  }
});