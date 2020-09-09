from django.shortcuts import render

# Create your views here.


import json

# from django.core.serializers.json import DjangoJSONEncoder
# from django.db.models import Count
from django.http import HttpResponse, JsonResponse
from django.shortcuts import redirect, render
from smech.core.models import *
from smech.core.sql import *
from smech.core.utils.common import *


def index(request):
    return render(request, 'home.html')


def get_leave_holiday(request):
    data = execute_my_sql(SAMPLE_SQL)
    return HttpResponse(json.dumps(data), content_type="application/json")
