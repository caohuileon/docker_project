""" This file is to setup global used common API """

from collections import namedtuple
from django.db import connection


def execute_my_sql(sql, res="dict"):
    """
    Execute customer SQL and return a list dict result or a list tuple without keys, only contain values.
    :param sql: customer SQL
    :param res: return data type
    :return: [{key1: value1, key2, value2, ...}, {key3: value3, ...}] or [{value1, value2, ...}, {value3, ...}]
    """
    with connection.cursor() as cursor:
        cursor.execute(sql)
        if res == "tuple":
            return named_tuple_fetch_all(cursor)
        return dict_fetch_all(cursor)


def dict_fetch_all(cursor):
    """
    Return all rows from a cursor as a dict
    :param cursor: a database connection object
    :return: a list dict with database [{key1: value1, key2, value2, ...}, {key3: value3, ...}]
    """
    columns = [col[0] for col in cursor.description]
    return [dict(zip(columns, row)) for row in cursor.fetchall()]


def named_tuple_fetch_all(cursor):
    """
    Return all rows from a cursor as a named tuple
    :param cursor: a database connection object
    :return: a list tuple without keys, only contain values. [{value1, value2, ...}, {value3, ...}]
    """
    desc = cursor.description
    nt_result = namedtuple('Result', [col[0] for col in desc])
    return [nt_result(*row) for row in cursor.fetchall()]
