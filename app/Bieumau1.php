<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Technology;
use App\Element;

class Bieumau1 extends Model
{
	protected $table = "bieumau1";
    
    protected $fillable = [
        'user_id',
    	'name',
        'publish_day',
        'reporter',
        'receiver',
        'reporter_year',
        'reporter_element_name',
        'reporter_transfer_name',
        'reporter_eng_name',
        'address',
        'city',
        'phone',
        'email',
        'fax',
        'website',
        'establish_code',
        'establish_day',
        'establish_lever',
        'tax_number',
        'certificate_number',
        'certificate_date',
        'certificate_grant',
        'manager',
        'manager_city',
        'type_company',
        'type_econom',
        'money',
        'lab_number',
        'lab_range',
        'lab_description',
        'report_info',
    ];

    public function labNumber($n){
        $ln = explode(',', $this->lab_number);
        return in_array($n, $ln);
    }

    public function receiverHAS($n){
        $ln = explode(',', $this->receiver);
        return in_array($n, $ln);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function detachTechnologies()
    {
        foreach ($this->technologies as $t) {
            $t->delete();
        }
        return;
    }

    public function detachElements()
    {
        foreach ($this->elements as $t) {
            $t->delete();
        }
        return;
    }

    public function technologies()
    {
        return $this->hasMany('App\Technology');
    }

    public function elements()
    {
        return $this->hasMany('App\Element');
    }

    public function receiverTmp(){
        $res = "<br/><input type='checkbox' "; 
        if ($this->receiverHAS(1)) 
            $res .="checked";
        else 
            $res .="unchecked";

        $res .= "/><a>Cục Thông tin KH&CN Quốc gia</a><br/><input type='checkbox' ";
        if ($this->receiverHAS(2)) 
            $res .="checked";
        else 
            $res .="unchecked";
        $res .="/><a>Sở KH&CN tỉnh, tp.trực thuộc TƯ</a><br/>";

        return $res;
    }

    public function establishLeverTmp(){
        $res = "<br/><input type='checkbox' unchecked/><a>8.1. Quốc hội, Ủy ban thường vụ Quốc hội</a><br/><input type='checkbox' unchecked/><a>8.2. Chính phủ</a><br/><input type='checkbox' unchecked/><a>8.3. Tòa án nhân dân tối cao</a>
<br/><input type='checkbox' unchecked/><a>8.4. Viện Kiểm sát nhân dân tối cao</a><br/><input type='checkbox' unchecked/><a>8.5. Thủ tướng Chính phủ</a><br/><input type='checkbox' unchecked/><a>8.6. Bộ trưởng, Thủ trưởng cơ quan ngang Bộ, cơ quan thuộc Chính phủ</a><br/><input type='checkbox' unchecked/><a>8.7. Ủy ban nhân dân tỉnh, thành phố trực thuộc Trung ương</a><br/><input type='checkbox' unchecked/><a>8.8. Tổ chức chính trị, tổ chức chính trị-xã hội, tổ chức xã hội, tổ chức xã hội-nghề nghiệp</a><br/><input type='checkbox' unchecked/><a>8.9. Doanh nghiệp, tổ chức khác, cá nhân</a>";
        $res = str_replace('unchecked/><a>8.'.$this->establish_lever, 'checked/><a>8.'.$this->establish_lever, $res);

        return $res;
    }

    public function typeCompanyTmp()
    {
        $res = "<br/>
<input type='checkbox' unchecked value='1'/><a>13.1. Cơ quan quản lý nhà nước</a>
<br/>
<input type='checkbox' unchecked value='2'/><a>13.2. Tổ chức nghiên cứu khoa học và phát triển công nghệ</a>
<br/>
<input type='checkbox' unchecked value='3'/><a>13.3. Cơ sở giáo dục đại học,cụ thể:</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='4'/><a>Đại học</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='5'/><a>Học viện</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='6'/><a>Cao đẳng</a>
<br/>
<input type='checkbox' unchecked value='7'/><a>13.4. Tổ chức dịch vụ KH&CN, cụ thể:</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='8'/><a>DV thông tin, thư viện</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='9'/><a>DV bảo tàng cho KH&CN</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='10'/><a>DV dịch thuật, biên tập, xuất bản cho KH&CN</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='11'/><a>DV điều tra cơ bản định kỳ, thường xuyên</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='12'/><a>DV thống kê, điều tra xã hội</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='13'/><a>DV tiêu chuẩn đo lường chất lượng</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='14'/><a>DV tư vấn về KH&CN</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='15'/><a>DV sở hữu trí tuệ</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='16'/><a>DV chuyển giao công nghệ</a>
<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='checkbox' unchecked value='17'/><a>DV KH&CN khác</a>
<br/>
<input type='checkbox' unchecked value='18'/><a>13.5. Đơn vị sự nghiệp khác mục 13.2, 13.3, 13.4</a>
<br/>
<input type='checkbox' unchecked value='19'/><a>13.6. Doanh nghiệp KH&CN</a>
<br/>
<input type='checkbox' unchecked value='20'/><a>13.7. Doanh nghiệp</a></td>";

        $res = str_replace("unchecked value='".$this->type_company, "checked value='".$this->type_company, $res);

        return $res;
    }

    public function typeEconomTmp(){
        $res = "<br/>
<input type='checkbox' unchecked/><a>14.1. Nhà nước</a>
<br/>
<input type='checkbox' unchecked/><a>14.2. Ngoài nhà nước</a>
<br/>
<input type='checkbox' unchecked/><a>14.3. Có vốn đầu tư nước ngoài</a></td>";
        $res = str_replace("unchecked/><a>14.".$this->type_econom, "checked/><a>14.".$this->type_econom, $res);

        return $res;
    }

    public function technologiesTmp(){
        $technologies = $this->technologies;
        $res = "";
        foreach ($technologies as $t) {
            $res .="<tr>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$t->name."</td>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$t->code."</td>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$t->country."</td>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$t->year."</td>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$t->use_year."</td>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$t->money."</td>
</tr>";
        }

        return $res;
    }

    public function labNumberTmp()
    {
        $res = "<input type='checkbox'";
        if ($this->labNumber(1))
            $res .= "checked />";
        else
            $res .="unchecked />";
        $res .= "<a>Khoa học tự nhiên</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox'";
        if ($this->labNumber(2))
            $res .= "checked";
        else
            $res .="unchecked";
        $res .="/><a>Khoa học kỹ thuật và công nghệ</a><br/><input type='checkbox'"; 
        if ($this->labNumber(3))
            $res .= "checked";
        else
            $res .="unchecked";
        $res .="/><a>Khoa học y, dược</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox'";
        if ($this->labNumber(4))
            $res .= "checked";
        else
            $res .="unchecked";
        $res .= "/><a>Khoa học nông nghiệp</a><br/><input type='checkbox'";
        if ($this->labNumber(5))
            $res .= "checked";
        else
            $res .="unchecked";
        $res .="/><a>Khoa học xã hội</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox'";
        if ($this->labNumber(6))
            $res .= "checked";
        else
            $res .="unchecked";
        $res .="/><a>Khoa học nhân văn</a><br/>";

        return $res;
    }

    public function reportInfoTmp()
    {
        $res = "<br/><input type='checkbox' unchecked value='1'/><a>Bao gồm số liệu của toàn bộ đơn vị/tổ chức, kể cả các đơn vị trực thuộc có tư cách pháp nhân;</a><br/><input type='checkbox' unchecked value='2'/><a>Không bao gồm số liệu của các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng (Những đơn vị này có báo cáo riêng).</a>";
        $res = str_replace("unchecked value='".$this->report_info, "checked value='".$this->report_info, $res);

    }

    public function elementTmp()
    {
        $elements = $this->elements;
        $res = "";
        $i = 0;
        foreach ($elements as $e) {
            $res .="<tr>
                    <td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".++$i."</td>
                    <td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$e->name."</td>
                    <td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$e->leader."</td>
                    <td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: left;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$e->address."</td>
                </tr>";
        }
        return $res;
    }

    public function generateBieu1()
    {
        $file = file_get_contents('tmp/temp_1/b1.tmp', true);
        $file = str_replace('@year@', $this->reporter_year, $file);
        $file = str_replace('@reporter_element_name@', $this->reporter_element_name, $file);
        $file = str_replace('@receiver@', $this->receiverTmp(), $file);
        $file = str_replace('@reporter_transfer_name@', $this->reporter_transfer_name, $file);
        $file = str_replace('@reporter_eng_name@', $this->reporter_eng_name, $file);
        $file = str_replace('@address@', $this->address, $file);
        $file = str_replace('@city@', $this->city, $file);
        $file = str_replace('@phone@', $this->phone, $file);
        $file = str_replace('@email@', $this->email, $file);
        $file = str_replace('@fax@', $this->fax, $file);
        $file = str_replace('@website@', $this->website, $file);
        $file = str_replace('@establish_code@', $this->establish_code, $file);
        $file = str_replace('@establish_day@', date('d/m/Y', strtotime($this->establish_day)), $file);
        $file = str_replace('@establish_lever@', $this->establishLeverTmp(), $file);
        $file = str_replace('@tax_number@', $this->tax_number, $file);
        $file = str_replace('@certificate_number@', $this->certificate_number, $file);
        $file = str_replace('@certificate_date@', date('d/m/Y', strtotime($this->certificate_date)), $file);
        $file = str_replace('@certificate_grant@', $this->certificate_grant, $file);
        $file = str_replace('@manager@', $this->manager, $file);
        $file = str_replace('@manager_city@', $this->manager_city, $file);
        $file = str_replace('@type_company@', $this->typeCompanyTmp(), $file);
        $file = str_replace('@type_econom@', $this->typeEconomTmp(), $file);
        $file = str_replace('@money@', $this->money, $file);
        $file = str_replace('@lab_range@', $this->lab_range, $file);
        $file = str_replace('@technologies@', $this->technologiesTmp(), $file);
        $file = str_replace('@lab_number@', $this->labNumberTmp(), $file);
        $file = str_replace('@lab_description@', $this->lab_description, $file);
        $file = str_replace('@report_info@', $this->reportInfoTmp(), $file);
        $file = str_replace('@element@', $this->elementTmp(), $file);

        return $file;
    }
}
