<?php
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
<td style="width:2px;" class="{{ ($paginator->currentPage() == 1) ? ' Tin_PhanTrang_HienTai' : 'Tin_PhanTrang' }}">
<a href="{{ $paginator->url(1) }}">1</a>
</td>
@for ($i = 2; $i <= $paginator->lastPage(); $i++)
<?php
$half_total_links = floor($link_limit / 2);
$from = $paginator->currentPage() - $half_total_links;
$to = $paginator->currentPage() + $half_total_links;
if ($paginator->currentPage() < $half_total_links) {
$to += $half_total_links - $paginator->currentPage();
}
if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
$from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
}
?>
@if ($from < $i && $i < $to)
<td  style="width:2px;" class="{{ ($paginator->currentPage() == $i) ? ' Tin_PhanTrang_HienTai' : 'Tin_PhanTrang' }}">
<a href="{{ $paginator->url($i) }}">{{ $i }}</a>
</td>
@endif
@endfor
<td style="width:75px;" class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' Tin_PhanTrang_HienTai' : 'Tin_PhanTrang' }}">
<a href="{{ $paginator->url($paginator->lastPage()) }}">Trang cuối</a>
</td>
@endif