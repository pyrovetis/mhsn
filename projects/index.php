<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="color-scheme" content="light dark" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.cyan.min.css"
    />

    <title>Mohsen Azarmanesh</title>
    <meta
      name="description"
      content="Passionate web developer with a strong focus on backend development. I love building robust systems and creating engaging user experiences. Always eager to learn new technologies."
    />
    <meta name="author" content="Mohsen Azarmanesh" />
    <meta name="copyright" content="Mohsen Azarmanesh" />
    <meta name="robots" content="index, follow" />

    <meta property="og:type" content="profile" />
    <meta property="og:title" content="Mohsen Azarmanesh" />
    <meta property="og:url" content="https://mhsn.ir" />
    <meta
      property="og:description"
      content="Passionate web developer with a strong focus on backend development. I love building robust systems and creating engaging user experiences. Always eager to learn new technologies."
    />
    <meta property="profile:first_name" content="Mohsen" />
    <meta property="profile:last_name" content="Azarmanesh" />
    <meta property="profile:username" content="PyroVetis" />

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/assets/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/assets/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/assets/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="/assets/favicon/site.webmanifest" />

    <link rel="stylesheet" href="/assets/styles.css" />
  </head>
  <body>
    <main class="container">
      <section>
        <hgroup>
          <h1>My Projects</h1>
          <p>
            <small><em>Total: 6 (5 online, 1 offline)</em></small
            ><br />
            <small
              ><em
                >Last updated:
                <?php
                        $filename = __FILE__;
                        $lastModifiedTimestamp = filemtime($filename);
                        $lastModified = date("F Y", $lastModifiedTimestamp);
                        echo $lastModified;
                        ?>
              </em></small
            >
          </p>
        </hgroup>
        <a href="/" class="contrast">Go Back</a>
      </section>
      <section>
        <h2>Online Projects</h2>
        <div class="grid">
          <article>
            <header>MHSN</header>
            <p>Personal portfolio.</p>
            <p>Technologies used: <code>HTML, CSS</code></p>
            <footer>
              <a href="/" target="_blank">Link to mhsn</a> |
              <a href="https://github.com/pyrovetis/mhsn" target="_blank"
                >GitHub</a
              >
            </footer>
          </article>

          <article>
            <header>EXILE</header>
            <p>URL shortener.</p>
            <p>Technologies used: <code>Flask, HTMX</code></p>
            <footer>
              <a href="https://exile.ir" target="_blank">Link to exile</a> |
              <a href="https://github.com/pyrovetis/exile" target="_blank"
                >GitHub</a
              >
            </footer>
          </article>

          <article>
            <header>Feedbeen</header>
            <p>Finance news app.</p>
            <p>Technologies used: <code>Next.js</code></p>
            <footer>
              <a href="https://feedbeen.com" target="_blank">Link to feedbeen</a>
            </footer>
          </article>
        </div>
        <div class="grid">
          <article>
            <header>FUMINSHO</header>
            <p>Playlist tools.</p>
            <p>Technologies used: <code>Django</code></p>
            <footer>
              <a href="https://fuminsho.ir" target="_blank">Link to fuminsho</a>
              |
              <a href="https://github.com/pyrovetis/fuminsho" target="_blank"
                >GitHub</a
              >
            </footer>
          </article>

          <article>
            <header>BRAINDAMAGE</header>
            <p>Random image api.</p>
            <p>Technologies used: <code>PHP</code></p>
            <footer>
              <a href="https://braindamage.ir" target="_blank">Link to braindamage</a>
            </footer>
          </article>

          <article style="opacity: 0"></article>
        </div>
      </section>
      <section>
        <h2>Offline Projects</h2>
        <div class="grid">
          <article>
            <header>NEZARAT</header>
            <p>Finance app.</p>
            <p>Technologies used: <code>Next.js</code></p>
          </article>

          <article style="opacity: 0"></article>

          <article style="opacity: 0"></article>
        </div>
      </section>
    </main>

    <script type="application/ld+json">
      {
        "@context": "http://schema.org/",
        "@type": "Person",
        "name": "Mohsen Azarmanesh",
        "url": "https://mhsn.ir",
        "jobTitle": "Web Developer",
        "sameAs": ["https://x.com/SobhanPyro"]
      }
    </script>
  </body>
</html>
