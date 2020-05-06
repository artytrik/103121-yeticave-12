<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php foreach ($categories as $category): ?>
        <li class="promo__item promo__item--boards">
            <a class="promo__link" href="pages/all-lots.html"><?= htmlspecialchars($category); ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php foreach ($goods as $good): ?>
        <li class="lots__item lot">
            <div class="lot__image">
                <img src=<?= htmlspecialchars($good['img']); ?> width="350" height="260" alt=<?= htmlspecialchars($good['name']); ?>>
            </div>
            <div class="lot__info">
                <span class="lot__category"><?= htmlspecialchars($good['category']); ?></span>
                <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= htmlspecialchars($good['name']); ?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая цена</span>
                        <span class="lot__cost"><?= format_price(htmlspecialchars($good['price'])); ?></span>
                    </div>
                    <div
                        <?= get_time_range($good['finish_date'])[0] >= 1
                            ? 'class="lot__timer timer"'
                            : 'class="lot__timer timer timer--finishing"'
                        ?>
                    >
                        <?= implode(':' ,get_time_range($good['finish_date'])); ?>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</section>