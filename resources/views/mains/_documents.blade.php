<div class="liketab">
                <div class="itemHeader">
                    <div class="active">
                        <span>
                                    <img src="/image/kvr.gif" />
                                Văn bản mới </span>
                    </div>

                    <ul class="ListLine">

                        <li><a href='/talieu/danhsach/luat'>
                                    Luật
                                </a></li>

                        <li><a href='/talieu/danhsach/nghidinh'>
                                    Nghị định
                                </a></li>

                        <li><a href='/talieu/danhsach/thongtu'>
                                    Thông tư
                                </a></li>

                        <li><a href='/talieu/danhsach/chidinh'>
                                    Chỉ thị
                                </a></li>

                        <li><a href='/talieu/danhsach/quyetdinh'>
                                    Quyết định
                                </a></li>

                    </ul>

                </div>
                <!--  -->
                <div class="groupItem">
                    <div>
                        <table cellspacing="0" cellpadding="4" border="0" id="ctl00_ContentPlaceHolder1_VanBanMoi1_GridViewItem" style="color:#333333;width:100%;border-collapse:collapse;">
                            @foreach($documents as $document)
                            <tr class="DanhBa_DongLe">
                                <td align="left" style="width:160px;">
                                    <span style="color: #000099;">
                                                {{$document->code}}
                                            </span>
                                    <br />
                                    <div style="color: #666; font-size: 11px; font-weight: normal; margin: 5px 0px 5px 0px;">
                                        Ban hành: <span style="color: #ff0000;">
                                                {{$document->publish_day}}</span>
                                    </div>

                                </td>
                                <td align="justify">
                                    <a href="/thongke/khoahoccongnghe/doc/{{$document->id}}">
                                            {{$document->description}}
                                        </a>
                                </td>
                                <td align="center" style="width:80px;">
                                    <a href='/uploads/{{$document->id}}'>Tải
                                    về </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <table style="width: 100%;">
            <tr>

                <td align="left">
                    <span id="ctl00_ContentPlaceHolder1_Tinnoibat1_lblPhanTrang"><table border="0">
                                <tr>
@include('pagination.default', ['paginator' => $documents])
                                </tr>
                            </table>

                        </span>
                </td>
                <td align="right" style="width: 200px">
                    &nbsp;
                </td>
            </tr>
        </table>
                    </div>
                </div>
            </div>