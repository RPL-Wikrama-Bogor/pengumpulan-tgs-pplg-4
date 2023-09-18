{
  "nbformat": 4,
  "nbformat_minor": 0,
  "metadata": {
    "colab": {
      "provenance": [],
      "authorship_tag": "ABX9TyPDeEu4RNFvLV+bdZdOqHzy",
      "include_colab_link": true
    },
    "kernelspec": {
      "name": "python3",
      "display_name": "Python 3"
    },
    "language_info": {
      "name": "python"
    }
  },
  "cells": [
    {
      "cell_type": "markdown",
      "metadata": {
        "id": "view-in-github",
        "colab_type": "text"
      },
      "source": [
        "<a href=\"https://colab.research.google.com/github/RPL-Wikrama-Bogor/pengumpulan-tgs-pplg-4/blob/12209386/fileDrivePython.py\" target=\"_parent\"><img src=\"https://colab.research.google.com/assets/colab-badge.svg\" alt=\"Open In Colab\"/></a>"
      ]
    },
    {
      "cell_type": "code",
      "execution_count": null,
      "metadata": {
        "colab": {
          "base_uri": "https://localhost:8080/"
        },
        "id": "dBg0ugQqTwQR",
        "outputId": "d5d1f3bd-c6f2-474c-bc63-46df4862bea7"
      },
      "outputs": [
        {
          "output_type": "stream",
          "name": "stdout",
          "text": [
            "<class 'int'>\n",
            "<class 'float'>\n",
            "<class 'str'>\n"
          ]
        }
      ],
      "source": [
        "x = 5\n",
        "print (type(x))\n",
        "\n",
        "y = 0.5\n",
        "print (type(y))\n",
        "\n",
        "z = \"Hello World\"\n",
        "print(type(z))"
      ]
    },
    {
      "cell_type": "code",
      "source": [],
      "metadata": {
        "id": "GUgHmP52ij8-"
      },
      "execution_count": null,
      "outputs": []
    },
    {
      "cell_type": "code",
      "source": [
        "for i in range(1):\n",
        "  print (i)\n",
        "\n",
        "j = 0\n",
        "while j<10 :\n",
        "  j = j + 1\n",
        "\n",
        "total = 0\n",
        "for i in range(2,6) :\n",
        "\n"
      ],
      "metadata": {
        "colab": {
          "base_uri": "https://localhost:8080/"
        },
        "id": "uAP3FxpMYec4",
        "outputId": "cff2c2f2-d5e0-4477-cf27-1f1b796bf471"
      },
      "execution_count": null,
      "outputs": [
        {
          "output_type": "stream",
          "name": "stdout",
          "text": [
            "0\n",
            "1\n",
            "2\n",
            "3\n",
            "4\n",
            "5\n",
            "6\n",
            "7\n",
            "8\n",
            "9\n",
            "0\n",
            "1\n",
            "2\n",
            "3\n",
            "4\n",
            "5\n",
            "6\n",
            "7\n",
            "8\n",
            "9\n"
          ]
        }
      ]
    },
    {
      "cell_type": "code",
      "source": [
        "lanjut = True\n",
        "while(lanjut) :\n",
        "  option = input(\"lanjut atau tidak ? (y/n)\")\n",
        "  if(option == 'n') :\n",
        "    lanjut = False\n",
        "    print (\"program berhenti\")"
      ],
      "metadata": {
        "colab": {
          "base_uri": "https://localhost:8080/"
        },
        "id": "ZWRZPrBxilCa",
        "outputId": "9e3e8497-5cdc-468a-ef44-51d0b40ce60e"
      },
      "execution_count": null,
      "outputs": [
        {
          "output_type": "stream",
          "name": "stdout",
          "text": [
            "lanjut atau tidak ? (y/n)n\n",
            "program berhenti\n"
          ]
        }
      ]
    },
    {
      "cell_type": "code",
      "source": [
        "username = \"smk\"\n",
        "password = \"wikrama\"\n",
        "kesempatan = 3\n",
        "\n",
        "while (kesempatan > 0):\n",
        "  username_user = input(\"masukan username : \")\n",
        "  password_user = input(\"masukan password : \")\n",
        "\n",
        "  if(username == username_user and password == password_user):\n",
        "    print(\"login berhasil\")\n",
        "    break\n",
        "  else :\n",
        "    kesempatan -= 1\n",
        "    print(\"kesempatan tersisa {} kali lagi\" . format(kesempatan))"
      ],
      "metadata": {
        "colab": {
          "base_uri": "https://localhost:8080/"
        },
        "id": "cF54-nSYjYDt",
        "outputId": "9b1937cf-e03c-40ef-c35d-99a5477a9056"
      },
      "execution_count": null,
      "outputs": [
        {
          "output_type": "stream",
          "name": "stdout",
          "text": [
            "masukan username : wikrama\n",
            "masukan password : smk\n",
            "kesempatan tersisa 2 kali lagi\n",
            "masukan username : smk \n",
            "masukan password : wikrama\n",
            "kesempatan tersisa 1 kali lagi\n",
            "masukan username : smk\n",
            "masukan password : wikrama\n",
            "login berhasil\n"
          ]
        }
      ]
    },
    {
      "cell_type": "code",
      "source": [
        "def tambahHippo():\n",
        "  hippos = 0\n",
        "  answer = 'y'\n",
        "  while answer == 'y' :\n",
        "    hippos = hippos + 1\n",
        "    print(\"ada {} Hippo\" . format(hippos))\n",
        "    answer = input(\"tambahkan hippo ? (y/n)\")\n",
        "\n",
        "tambahHippo()\n"
      ],
      "metadata": {
        "colab": {
          "base_uri": "https://localhost:8080/"
        },
        "id": "BMn6ppD0lOu_",
        "outputId": "1e4619b3-c99c-47a0-90e4-d39bcf3f9b12"
      },
      "execution_count": null,
      "outputs": [
        {
          "name": "stdout",
          "output_type": "stream",
          "text": [
            "ada 1 Hippo\n",
            "tambahkan hippo ? (y/n)y\n",
            "ada 2 Hippo\n",
            "tambahkan hippo ? (y/n)y\n",
            "ada 3 Hippo\n",
            "tambahkan hippo ? (y/n)n\n"
          ]
        }
      ]
    },
    {
      "cell_type": "code",
      "source": [],
      "metadata": {
        "id": "huhtmg19oxi1"
      },
      "execution_count": null,
      "outputs": []
    }
  ]
}