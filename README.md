# PHP Contracts (Interfaces)

Sistemi oluşturan tüm projelerde kullanılan veya kullanılabilecek olan arayüzleri barındırır.

Bu paket yalnızca PHP dilinde yazılmış Interface'ler barındırır.

Buna benzer -yalnız contract interface'i veya contract interface'leri ile birlikte bir takım trait'ler barındıran- paketlere örnek olarak şunlar verilebilir:

- Laravel Contracts: https://github.com/illuminate/contracts
- Symfony Contracts: https://github.com/symfony/contracts

Contract interface'leri, tasarım prensiplerinden "Interface Segregation" prensibi daima göz önünde bulundurularak tasarlanmalıdır. Interface'ler bölünmesi gereken noktalardan mutlaka bölünmelidir.

Pakete contract eklemek için v1 namespace'i altındaki uygun ana katman namespace'i içinde herhangi path'e interface oluşturmak yeterlidir.

Contract eğer değişikliğe uğratılacaksa namespace'de version atlatılmalıdır. Mesela v1 altındaki bir interface modifiye edilmek isteniyorsa v1 altında modifiye edilmeyip v2 namespace'i altına kopyalanarak kopyalandığı yerde değiştirilmelidir.

Namespace versiyonuna dikkat edilirse paket versiyon'larının bir önemi kalmayacaktır. Haliyle `semver` versiyonlamaya da gerek yoktur.

Contract interface'leri 3 ana grup altında gruplanmıştır:

- Applications
- Domains
- Infrastructure

Arayüzlerin izimlendirilmesinde bir konvansiyon takip edilmiştir:

Her arayüz ismi `...Interface` ile bitirilmiştir.

Bir `setter`dan ibaret arayüzlerde:

`...PickerInterface`: `null` OLMAYAN herhangi `primitive` tipte bir değer veya boş bile olsa bir `array` kabul edebilen nesneler için...

`...DoneeInterface`: `null` da olabilen herhangi `primitive` tipte bir değer veya boş bile olsa bir `array` kabul edebilen nesneler için...

`...AwareInterface`: `null` OLMAYAN bir `object` veya bir `resource` kabul edebilen nesneler için...

`...HostInterface`: `null` da olabilen bir nesne veya bir resource kabul edebilen nesneler için...

Bir `getter`dan ibaret arayüzlerde:

`...ProviderInterface`: `null` HARİCİNDE herhangi bir tipte değer sunabilen nesneler için...

`...DonorInterface`: `null` da olabilen herhangi `primitive` tipte bir değer veya boş bile olsa bir `array` sunabilen nesneler için...

`...WindowInterface`: `null` da olabilen bir `object` veya bir `resource` sunabilen nesneler için...
