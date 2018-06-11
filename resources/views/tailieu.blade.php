@extends('layouts.main')

@section('content')
	<div id="div_Body" style="z-index: 100; padding:10px 10px 10px 10px; margin-top: 30px;">
    	<table border="0" cellpadding="0" cellspacing="0" width="100%">
    	    <tr>
	            <td valign="top" style="padding: 10px 10px 10px 10px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
				        <tr>
				            <td valign="top">
				                <div style="margin: 10px"></div>
				                <table border="0" cellpadding="0" cellspacing="0" width="100%">
				                    <tr>
				                        <td align="right" valign="top"></td>
				                    </tr>
				                </table>
				            </td>
				        </tr>
				    </table>
    @include("mains._documents")
				<br />
    			</td>
    @include("mains._rightbar")
    		</tr>
    	</table>
    </div>
@endsection