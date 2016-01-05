# -*- coding: utf-8 -*-
# vim: ai ts=4 sts=4 et sw=4
import math
import numpy as np


def declinacao_solar(dn):
    return np.rad2deg(np.deg2rad(-23.45)*np.sin(360.0*((dn+284.0)/365.0)))

def ds(dn):
    return declinacao_solar(dn)

print ds(294)