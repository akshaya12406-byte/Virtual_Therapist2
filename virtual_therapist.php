<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Virtual Therapist — Demo</title>
  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --muted:#94a3b8;
      --accent:#6ee7b7;
      --glass: rgba(255,255,255,0.03);
      --maxw:1100px;
      --radius:12px;
      --glass-2: rgba(255,255,255,0.02);
    }
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial; background:linear-gradient(180deg,#071025 0%, var(--bg) 100%); color:#e6eef6; -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}
    .container{max-width:var(--maxw);margin:36px auto;padding:24px}
    header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px}
    .brand{display:flex;gap:12px;align-items:center}
    .logo{width:52px;height:52px;border-radius:10px;background:linear-gradient(135deg,var(--accent),#34d399);display:flex;align-items:center;justify-content:center;color:#052023;font-weight:700;font-size:20px}
    nav a{color:var(--muted);text-decoration:none;margin-left:18px;font-weight:600}
    nav a:hover{color:var(--accent)}

    .grid{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:start}
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent); border:1px solid rgba(255,255,255,0.04); padding:18px;border-radius:var(--radius)}

    .hero{padding:28px;border-radius:var(--radius);display:flex;flex-direction:column;gap:14px}
    h1{margin:0;font-size:28px;line-height:1.05}
    p.lead{margin:0;color:var(--muted)}

    .video-wrap{margin-top:6px;border-radius:10px;padding:0;overflow:hidden;border:1px solid rgba(255,255,255,0.04)}
    iframe{display:block;width:100%;height:360px;border:0}

    .about{margin-top:18px;color:var(--muted);line-height:1.55}

    /* Chat column */
    .chat-area{height:640px;display:flex;flex-direction:column}
    .chat-header{display:flex;align-items:center;gap:12px;margin-bottom:12px}
    .therapist-avatar{width:56px;height:56px;border-radius:10px;background:linear-gradient(180deg,#10b981,#06b6d4);display:flex;align-items:center;justify-content:center;font-weight:700;color:#012;}
    .chat-messages{flex:1;overflow:auto;padding:12px;border-radius:10px;background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.005));border:1px solid rgba(255,255,255,0.02)}
    .msg{display:flex;gap:12px;margin-bottom:12px}
    .msg.user{justify-content:flex-end}
    .bubble{max-width:78%;padding:10px 14px;border-radius:12px;background:var(--glass);color:var(--muted);font-size:14px}
    .bubble.user{background:linear-gradient(180deg,#042f2a,#063845);color:#d7fff3}
    .bubble.bot{background:var(--card);border:1px solid rgba(255,255,255,0.03);}

    .chat-input{display:flex;gap:8px;margin-top:12px}
    .chat-input textarea{flex:1;min-height:56px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit;padding:10px 12px;resize:none}
    .btn{background:linear-gradient(90deg,var(--accent),#34d399);border:none;padding:12px 16px;border-radius:10px;font-weight:700;color:#042023;cursor:pointer}
    .btn.secondary{background:transparent;border:1px solid rgba(255,255,255,0.04);color:var(--muted)}

    footer{margin-top:28px;text-align:center;color:var(--muted);font-size:13px}

    /* small screens */
    @media (max-width:980px){
      .grid{grid-template-columns:1fr;}
      iframe{height:220px}
      .chat-area{height:520px}
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="brand">
        <div class="logo">VT</div>
        <div>
          <div style="font-weight:700">Virtual Therapist</div>
          <div style="font-size:13px;color:var(--muted)">Compassionate conversations, anytime</div>
        </div>
      </div>
      <nav>
        <a href="#demo">Demo</a>
        <a href="#about">About</a>
        <a href="#chat">Chat</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>

    <main class="grid">
      <section>
        <div class="card hero">
          <h1>Calm, private conversations with a virtual therapist</h1>
          <p class="lead">A demo of how the chatbot works, plus short guided sessions and empathetic replies. This front-end is responsive and easy to integrate with a backend AI service.</p>

          <div id="demo" class="video-wrap" style="margin-top:16px">
            <!-- Replace the src below with your YouTube demo video -->
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Demo video" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
          </div>

          <div id="about" class="about">
            <h3 style="color:#bfeadf;margin-top:16px">About</h3>
            <p>Virtual Therapist provides conversational support focused on listening, reflecting, and suggesting small coping strategies. It is not a replacement for licensed mental health professionals. Use the chat to try a sample conversation — the UI below includes a simulated therapist response engine and integration hints for connecting a real AI backend (OpenAI, Dialogflow, Rasa, etc.).</p>
          </div>
        </div>

        <div class="card" style="margin-top:18px">
          <h3 style="margin:0 0 8px 0">How it works</h3>
          <ul style="color:var(--muted);line-height:1.6;margin:0;padding-left:18px">
            <li>Front-end: this single HTML page with embedded YouTube demo and chat UI.</li>
            <li>Chat: local simulated responses for demo; integration-ready for a backend AI endpoint.</li>
            <li>Privacy note: do not send personal health info unless you trust a secure backend and proper data handling.</li>
          </ul>
        </div>
      </section>

      <aside>
        <div class="card chat-area">
          <div>
            <div class="chat-header">
              <div class="therapist-avatar">VT</div>
              <div>
                <div style="font-weight:700">Thera — Virtual Therapist</div>
                <div style="font-size:13px;color:var(--muted)">Here to listen. Start typing below.</div>
              </div>
            </div>
          </div>

          <div id="messages" class="chat-messages" aria-live="polite"></div>

          <div class="chat-input">
            <textarea id="input" placeholder="Type how you feel or ask for guidance..." aria-label="message input"></textarea>
            <div style="display:flex;flex-direction:column;gap:8px">
              <button id="sendBtn" class="btn">Send</button>
              <button id="resetBtn" class="btn secondary">Reset</button>
            </div>
          </div>

          <div style="margin-top:10px;color:var(--muted);font-size:12px">Tip: this demo uses a simulated therapist on the client. For production, proxy requests to your server which calls an AI API.</div>
        </div>

        <div class="card" style="margin-top:18px">
          <h4 style="margin:0 0 8px 0">Integration notes</h4>
          <div style="color:var(--muted);font-size:13px;line-height:1.5">
            <strong>Quick:</strong> create a server endpoint (e.g. /api/chat) which accepts POST with conversation history and returns a reply. Never put API keys in front-end code. Below in the JS you'll find a commented fetch snippet showing how to call a backend.
          </div>
        </div>

      </aside>
    </main>

    <footer id="contact">Built with care • Not a substitute for professional therapy.</footer>
  </div>

  <script>
    // Simple client-side simulated therapist with reflections and empathy.
    (function(){
      const messagesDiv = document.getElementById('messages');
      const input = document.getElementById('input');
      const sendBtn = document.getElementById('sendBtn');
      const resetBtn = document.getElementById('resetBtn');

      const pushMessage = (text, who='bot') => {
        const wrapper = document.createElement('div');
        wrapper.className = 'msg ' + (who==='user' ? 'user' : 'bot');
        const bubble = document.createElement('div');
        bubble.className = 'bubble ' + (who==='user' ? 'user' : 'bot');
        bubble.textContent = text;
        wrapper.appendChild(bubble);
        messagesDiv.appendChild(wrapper);
        messagesDiv.scrollTop = messagesDiv.scrollHeight - messagesDiv.clientHeight;
      };

      const canned = [
        "That sounds really tough — tell me more about what happened.",
        "I hear you. That must be hard to carry.",
        "When you feel that way, what helps even a little?",
        "It makes sense you'd feel that way given what you described.",
        "Would you like a breathing exercise or a small coping step?"
      ];

      // small reflection helper
      function reflect(text){
        text = text.toLowerCase();
        if(/anx|nervous|worried/.test(text)) return "I hear anxiety and worry — would you like to try a short grounding exercise?";
        if(/sad|depress|down|unhappy/.test(text)) return "I'm sorry you're feeling so low. Would you like to talk about what's making you sad?";
        if(/angry|mad|frustrat/.test(text)) return "Anger is such a valid emotion. What do you think triggered this feeling?";
        if(/sleep|insomnia/.test(text)) return "Sleep troubles can wear you down. Want a quick tip to wind down before bed?";
        return null;
      }

      function botReply(userText){
        // 1) try reflection
        const r = reflect(userText);
        if(r) return r;
        // 2) else return a canned reply chosen randomly with some small transformation
        const choice = canned[Math.floor(Math.random()*canned.length)];
        // if user asked a question, match tone
        if(/\?$/.test(userText.trim())) return "That's a good question. " + choice.toLowerCase();
        return choice;
      }

      sendBtn.addEventListener('click', () => {
        const text = input.value.trim();
        if(!text) return;
        pushMessage(text, 'user');
        input.value = '';
        // show "typing"
        const typing = document.createElement('div');
        typing.className = 'msg';
        const b = document.createElement('div');
        b.className = 'bubble bot';
        b.textContent = 'Therapist is typing...';
        typing.appendChild(b);
        messagesDiv.appendChild(typing);
        messagesDiv.scrollTop = messagesDiv.scrollHeight - messagesDiv.clientHeight;

        // simulate thinking delay
        setTimeout(()=>{
          typing.remove();
          const reply = botReply(text);
          pushMessage(reply, 'bot');
        }, 900 + Math.random()*800);

        // For production: uncomment the snippet below and implement a server route /api/chat
        /*
        fetch('/api/chat', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ message: text, history: [] })
        })
        .then(r=>r.json())
        .then(data => { typing.remove(); pushMessage(data.reply, 'bot'); })
        .catch(err => { typing.remove(); pushMessage('Sorry — there was an error reaching the server.', 'bot'); });
        */
      });

      // quick keyboard send
      input.addEventListener('keydown', (e) => {
        if(e.key === 'Enter' && !e.shiftKey){ e.preventDefault(); sendBtn.click(); }
      });

      resetBtn.addEventListener('click', () => { messagesDiv.innerHTML=''; pushMessage('Hi — I am Thera. How can I support you today?', 'bot'); });

      // welcome message
      pushMessage('Hi — I am Thera. How can I support you today?', 'bot');

    })();
  </script>
</body>
</html>
