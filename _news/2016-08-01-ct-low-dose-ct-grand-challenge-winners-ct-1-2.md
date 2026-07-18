---
layout: post
title: "We were the winners of \"Low-Dose CT Grand Challenge\" ! 바이오영상신호처리 실험실 \"저선량 CT 그랜드 챌린지\" 국제 대회 1, 2위 휩쓸어."
date: 2016-08-18 12:00:00
inline: false
---

Congratutrations ! BISPL were the 1st and 2nd place winners of the **[CT Low-Dose Grand Challenge](http://www.aapm.org/GrandChallenge/LowDoseCT/).**

The overall objective of this [Low Dose CT Grand Challenge](http://www.aapm.org/GrandChallenge/LowDoseCT/) is to quantitatively assess the diagnostic performance of denoising and iterative reconstruction techniques on common low-dose patient CT datasets using a detection task, allowing the direct comparison of the various algorithms. The results will provide an indication of the range of performances achieved using different classes of denoising or iterative reconstruction techniques. The "Low Dose CT Grand Challenge was organinzed by Mayo Clinic and AAPM (American Association of Physicists in Medicine) and sponsored by National Institute of Health (NIH).

Team KAIST - Eunhee Kang, Junhong Min - won the 2nd place winners at the "Low Dose CT Grand Challenge". Team KAIST developed an algorithm called " **Deep Convolutional Neural Network using Directional Wavelets for x-ray CT Denoising"**. With the same diagnostic score for identify cancer metastasis, team KAIST won the 2nd place award. The team **record was tied with the 1st place winner, which is also an BISPL alumi, Dr. Kyungsang Kim at Mass General Hospital, and w** as placed to the 2nd due to a tie break rule.

This is the first result to utilize the "deep learning" approach for low-dose CT recon by demonstrating that diagnostic quality of deep learning approach is as good as an the existing model based iterative (MBIR) CT reconstruction results with much faster computational time. **C ongraturataions Eunhee, Junhong, and Kyungsang for wining the 1st and the 2nd place award !**
- 미래창조과학부 중견연구자지원사업의 지원을 받은 예종철 KAIST 석좌교수 (한국과학기술원) 연구실 출신의 연구자들이 신호처리 기술과 딥러닝* 기술을 이용하여 미국 의학물리학자협회 (AAPM: The American Association of Physicists in Medicine)에서 주최한 국제 저선량 CT** 그랜드 챌린지*** (Low Dose CT Grand Challenge)에서 **1-2위를 휩쓸고 우승** 했다고 밝혔다.
- 연구팀이 참가한 저선량 CT 그랜드 챌린지 (Low Dose CT Grand Challenge, [http://www.aapm.org/GrandChallenge/LowDoseCT/](http://www.aapm.org/GrandChallenge/LowDoseCT/))에는 의료영상분야의 세계 103 개의 팀이 참가 신청하여 CT촬영에서 방사선 피폭을 줄이면서도 진단의 정확도를 유지하는 알고리듬을 경쟁하였다. Mayo Clinic 의 영상 의학과 의사들이 직접 실시한 과학적인 통계분석으로 통해 진단의 유용성을 기준으로 참여 알고리즘을 평가하기 때문에 임상적용 측면에서 의의가 큰 대회이다.
- 반 년간의 공개 경쟁을 통해 세계 103개의 팀이 참가 신청해 최종 선발된 1-3위의 우승팀은 8월1일 워싱턴 DC에서 열리는 2016 AAPM Annual Meeting의 수상기념식에서 공표가 되었으며, 8월 2일 AAPM의 심포지움에서 초청강연을 하였고, 그 결과는 저널에 초청되어 게제 될 예정이다. 암의 전의 여부에 대한 검출에 대한 엄밀한 통계적인 방식으로 영상 의학과 임상의들을 통해 분석한 결과, 두 팀은 동일한 암전이 검출률로 1-2위의 영광을 안게 되었다.
- 연구팀은 이 문제를 해결하기 위해 신호처리 기법과 인공지능기법, 두 가지 방식으로 접근하였다. 우선 연구실 출신의 김경상 박사 (현. 하버드의대/메사추세츠종합병원 소속)팀은 기존의 의료영상 기법에서 많이 사용되는 신호처리기법인 “비국소적 평균 (non-local means)”기법의 다소 과도한 번짐 효과를 보완하여 성능을 향상 시킨 “공간 부호화 기반 비국소적 평균 (spatially-encoded non-local means)” 방법을 제안하였고 모델 기반형 반복적 복원기법으로 이 문제를 해결하였다. 더불어 연산 속도 향상을 위해 부분집합과 모멘텀 기법을 활용하였다. 이 기술은 성능과 연산 속도가 상대적으로 우수하기 때문에 **기술일부는 이미 KAIST 예종철 석좌교수 연구실에서 상용화하여 국내 CT 제조 업계들에 라이센싱** 을 하고 있는 이 분야의 선도 기술이다.
- 또한 강은희, 민준홍 연구원(현. KAIST 바이오영상신호처리 연구실 소속)팀은 이 문제를 해결하기 위해 새로운 기술로 인공지능의 기술인 딥러닝 기술에 주목했다. 딥러닝은 깊은 인공신경망 구조를 이용하는 알고리즘으로 최근 인공지능 분야를 주도하는 핵심 기술 중 하나이다. 기존에는, 영상 분류와 관련된 분야에만 주로 이용되었고 의료영상복원에는 적용사례가 드물었다. 특히 연구팀은 신호처리 기법인 웨이블렛 (wavelet)*변환을 딥러닝과 접목시켜 새로운 알고리즘을 개발하였다 (그림 2). 이를 통해 저선량 CT에서 발생하는 독특한 영상왜곡과 화질저하 문제를 성공적으로 해결하였다 (그림 1). 이 결과는 최 **신 인공지능기술인 딥러닝과 신호처리 기술을 접목하여 임상에 사용될 수 있는 고화질 의료영상복원의 첫 국제적 성공사례로 향후 관련 연구의 중요한 초석이 될 것이다.**
- 예종철 KAIST 석좌교수는 “ **세계 최고의 의료영상 분야의 연구 팀과의 엄밀한 경쟁을 통해 본 실험실 출신의 연구팀들이 1-2위를 휩쓴 것은, KAIST가 의료영상 분야를 세계적으로 선도하고 있음을 보여준 큰 쾌거이다. 특히, 이번 결과는 저선량 CT의 임상적용을 앞당길 것으로 기대한다.”** 하고 밝혔다.

**그림 1 (강은희,민준홍 연구원팀, 현 KAIST 소속) 인공지능을 이용한 저선량 X-ray CT 영상 복원: (a) 정상 선량으로 촬영한 CT 영상. 붉은 원은 종양 부분을 나타냄 (b) 저선량으로 촬영한 CT 영상. 뼈 주변 (파란박스)에서 선형태의 왜곡이 발생함 (c) 기존 영상처리 기술로 복원한 결과. 화질 개선이 미흡하고 선형태의 왜곡이 제거되지 않음 (d) 딥러닝을 이용한 영상결과. 제안된 방식은 저선량 영상에서 발생하는 영상 왜곡을 효과적으로 제거하고 화질을 개선하여 종양부분을 정확히 보여줌.**

그림 3 (김경상 박사 팀, 현 하바드 의대소속) 신호처리 기법을 이용한 저선량 X-ray CT 영상 복원: (a) 정상 선량으로 촬영한 CT 영상. 붉은 원은 전이 (metastasis) 된 부분을 나타냄 (b) 저선량으로 촬영한 CT 영상 (c) 신호처리 기법을 이용한 영상결과, 기존 영상에 비해 화질이 선명해 짐.
