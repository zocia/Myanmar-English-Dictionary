<style>
body{
    margin: 0;
    padding: 10px;
    font-family: 'Ubuntu', sans-serif;
    background: #ecf0f5;
}
.heading{
    font-weight: bold;
}
.invoice{
    min-height: 600px;
    position: relative;
    background: #fff;
    border: 1px solid #f4f4f4;
    padding: 0px;
    margin: 10px 25px;
    border-radius: 5px;
}
.line{
    padding: 20px;
    border-bottom: 1px solid #eee;
}
.result{
    text-transform: capitalize;
    cursor: pointer;
}
.result-mm {
    font-family: 'Padauk', sans-serif;
    font-weight: bold;
    cursor: pointer;
}
.def{
    font-family: 'Padauk', sans-serif;
    font-weight: bold;
}
.word{
    font-size: 16px;
    font-weight: bold;
}
.dict{
    background:#605ca8;
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    border-radius: 10px;
}
.dict-ox{
    background:#b13636;
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    border-radius: 10px;
}
.developed{
    font-weight: bold;
    padding: 0px 20px 0px 0px;
    color: rgb(182, 61, 61);
}

@media (max-width: 768px) {
    .line {
      padding: 10px 0px 0px 0px !important;
    }
    .line .heading{
        display: none;
    }
    .line .box{
        padding: 0px;
    }
    .meaning{
        min-height: 600px;
    }
    .list-group-item-warning ,.list-group-item-info {
        background: white !important;
        color: black !important;
    }
    .list-group{
        padding-left: 0;
        margin-bottom: 20px;
        box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
        border-radius: 5px;
    }
    .invoice{
        padding-right: 10px !important;
        padding-left: 10px !important;
        border-radius: 0px !important;
        margin: 0 !important;
    }
    h6{
        text-align: justify;
    }
    body{
        padding: 0px !important;
    }
  }

</style>