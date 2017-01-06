<h2>Kérem válasszon az alábbi könyvek közül!</h2>
<form action="index.php?go=search" method="post">
  <div class="row">
    <select name="type">
      <option>Kérem válasszon</option>
      <option value="title" <?= $this->typeSelect('title') ?>>Könyv címe alapján</option>
      <option value="isbn" <?= $this->typeSelect('isbn') ?>>ISBN</option>
      <option value="writer" <?= $this->typeSelect('writer') ?>>Szerző</option>
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
<?php if (!empty($this->books)): ?>
  <table cellpadding="0" class="search-table">
    <thead>
      <tr>
        <th>Könyv címe</th>
        <th>ISBN száma</th>
        <th>Szerző neve</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->books as $book): ?>
        <tr>
          <td>
            <?= $book['cim'] ?>
          </td>
          <td>
            <?= $book['isbn'] ?>
          </td>
          <td>
            <?= $book['nev'] ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <br>
  <img width="500" src="assets/images/book_<?= $this->type == 'writer' ? 'author' : 'flower' ?>.jpg">
<?php endif; ?>
