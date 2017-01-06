<h2>Kérem válasszon az alábbi könyvek közül!</h2>
<form action="index.php?go=search">
  <div class="row">
    <select name="type">
      <option>Kérem válasszon</option>
      <option value="title" <?= $sco->typeSelect('title') ?>>Könyv címe alapján</option>
      <option value="isbn" <?= $sco->typeSelect('isbn') ?>>ISBN</option>
      <option value="author" <?= $sco->typeSelect('author') ?>>Szerző</option>
    </select>
  </div>
  <div class="row">
    <label>írja be a keresendő kifejezést!</label>
  </div>
  <div class="row">
    <input type="text" name="search" placeholder="Keresés...">
  </div>
  <div class="row">
    <button type="submit">
      Keresés
    </button>
  </div>
</form>
