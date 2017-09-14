<style type="text/css">
    .pagination ul li {
        float: left;
        padding: 20px;
        list-style: none;
    }
</style>

<div class="page_content_wrap page_paddings_no contactus sidebar_hide">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post-15 page hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <h2 class="sc_title sc_title_regular">History Order</h2>
                                    <div class="sc_table widthfull">
                                        @if($pengaturan->checkoutType!=2)
                                            @if($order->count() > 0)
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>ID Order</span></td>
                                                            <td><span>Tanggal Order</span></td>
                                                            <td><span>Detail Order</span></td>
                                                            <td><span>Total Order</span></td>
                                                            <td><span>No. Resi</span></td>
                                                            <td><span>Status</span></td>
                                                            <td><span></span></td>
                                                        </tr>

                                                    
                                                        @foreach (list_order() as $item)
                                                        <tr>
                                                            <td>{{$pengaturan->checkoutType==3 ? prefixOrder().$item->kodePreorder : prefixOrder().$item->kodeOrder}}</td>
                                                            <td>{{$pengaturan->checkoutType==3 ? waktu($item->tanggalPreorder) : waktu($item->tanggalOrder)}}</td>
                                                            <td class="desc">
                                                                <ul>
                                                                @if($pengaturan->checkoutType==3) 
                                                                    <li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}<li>
                                                                @else 
                                                                    @foreach ($item->detailorder as $detail)
                                                                    
                                                                    <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
                                                                    
                                                                    @endforeach 
                                                                @endif
                                                                </ul>
                                                            </td>
                                                            <td class="quantity">{{ price($item->total) }}</td>
                                                            <td class="sub-price">{{ $item->noResi }}</td>
                                                            <td class="total-price">
                                                            @if($pengaturan->checkoutType==1) 
                                                                @if($item->status==0)
                                                                <span class="label label-warning">Pending</span>
                                                                @elseif($item->status==1)
                                                                <span class="label label-info">Konfirmasi diterima</span>
                                                                @elseif($item->status==2)
                                                                <span class="label label-success">Pembayaran diterima</span>
                                                                @elseif($item->status==3)
                                                                <span class="label label-success">Terkirim</span>
                                                                @elseif($item->status==4)
                                                                <span class="label label-danger">Batal</span>
                                                                @endif 
                                                            @else 
                                                                @if($item->status==0)
                                                                <span class="label label-warning">Pending</span>
                                                                @elseif($item->status==1)
                                                                <span class="label label-info">Konfirmasi DP diterima</span>
                                                                @elseif($item->status==2)
                                                                <span class="label label-success">DP terbayar</span>
                                                                @elseif($item->status==3)
                                                                <span class="label label-info">Menunggu pelunasan</span>
                                                                @elseif($item->status==4)
                                                                <span class="label label-success">Pembayaran lunas</span>
                                                                @elseif($item->status==5)
                                                                <span class="label label-success">Terkirim</span>
                                                                @elseif($item->status==6)
                                                                <span class="label label-danger">Batal</span>
                                                                @elseif($item->status==7)
                                                                <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                                                @endif
                                                            @endif
                                                            </td>
                                                            <td class="align-center">
                                                            @if($pengaturan->checkoutType==3) 
                                                                @if($item->status < 4)
                                                                <button onclick="window.open('{{url('konfirmasipreorder/'.$item->id)}}','_blank')" class="btnbingoOne" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa icon-eye"></i></button>
                                                                @endif 
                                                            @endif
                                                            @if($pengaturan->checkoutType==1) 
                                                                @if($item->status <= 1)
                                                                <button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btnbingoOne" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa icon-eye"></i></button>
                                                                @endif 
                                                            @endif
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{ list_order()->links() }} 
                                            @else
                                            <span>Belum ada data order</span>
                                            @endif
                                    
                                        @endif 
                                        <br>
                                    </div>
                                    <div class="vc_empty_space em_height_3">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                                    <div class="vc_empty_space em_height_3">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>
