@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="information">
                      <h3 class="title">Access-Token</h3>
                      <div class="content">
                        <p>access_token: <span>{{ Auth::user()->token }}</span></p>
                        <p>get_url: <span>{{ app()->getAppUrl() }}api/v1/url-shortener-sdk/<b>&lt;access_token&gt;</b>?url=<b>&lt;your_url_here&gt;</b></span></p>
                      </div>
                      <p class="pull-right" style="margin-top: 5px;"><button id="btnShowSampleCode">Show Sample-Code</button></p>
                    </div>

                    <div id="div_json_sample" class="information m_top20" style="display: none;">
                      <h3 class="title">Sample-Code</h3>
                      <div class="content">
                        <p>get_url: <a class="api_url" href="{{ app()->getAppUrl() }}api/v1/url-shortener-sdk/{{ Auth::user()->token }}?url=https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/" target="_blank">{{ app()->getAppUrl() }}api/v1/url-shortener-sdk/<b>{{ Auth::user()->token }}</b>?url=<b>https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/</b></a></p>
                        <p style="margin-top: 20px;">output_result:</p>
                        <div class="json_format">
                          <p>{</p>
                            <p class="j_content">Status: <span>200</span>,</p>
                            <p class="j_content">Message: <span>"Success."</span>,</p>
                            <p class="j_content">Hex_Code: <span>"ECD983"</span>,</p>
                            <p class="j_content">Short_Url: <span>"https://shorturl.kpa.ph/ECD983"</span>,</p>
                            <p class="j_content">Origin_Url_Title: <span>"https://webs.kpa.ph/2017/07/23/l"</span>,</p>
                            <p class="j_content">Origin_Url: <span>"https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/"</span></p>
                          <p>}</p>
                        </div>
                      </div>
                    </div>

                    <div class="information m_top20">
                      <h3 class="title">ShortURL-Generated</h3>
                      <div class="content" style="height: 300px; overflow-y: scroll;">
                        <table id="shortUrl_table" class="container">
                        	<thead>
                        		<tr>
                        			<th><h1>ShortUrl</h1></th>
                        			<th style="width: 100px;"><h1>Clicks</h1></th>
                        			<th style="width: 140px;"><h1>Created</h1></th>
                        			<th style="width: 95px;"><h1>Action</h1></th>
                        		</tr>
                        	</thead>
                        	<tbody>
                            @for($i = 0; $i < COUNT($urls); $i++)
                            <tr>
                        			<td><a class="table" href="{{ secure_url($urls[$i]["hex_code"]) }}" target="_blank">{{ secure_url($urls[$i]["hex_code"]) }}</a></td>
                        			<td>
                                <?php
                                  $shortener = new App\Http\Controllers\ShortUrlController();
                                  $counter = $shortener->get_counter($urls[$i]["id"]);
                                  echo $counter;
                                ?>
                              </td>
                        			<td>
                                <?php
                                  $ago = \Carbon\Carbon::createFromTimeStamp(strtotime($urls[$i]["created_at"]))->diffForHumans();
                                  echo $ago;
                                ?>
                              </td>
                        			<td><button id="btn_{{ $urls[$i]["id"] }}" onclick="delete_me({{ $urls[$i]["id"] }})">remove</button></td>
                        		</tr>
                            @endfor
                        	</tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
  var is_clicked = false;
  $("#btnShowSampleCode").click(function() {
    if(is_clicked) {
      is_clicked = false;
      $("#div_json_sample").hide();
      $("#btnShowSampleCode").text("Show Sample-Code");
    }
    else {
      is_clicked = true;
      $("#div_json_sample").show();
      $("#btnShowSampleCode").text("Hide Sample-Code");
    }
  });
})
</script>
@endsection
